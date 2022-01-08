<?php
session_start();

function files()
{
    if(isset($_FILES["dosya"])) {
        $tmp_name = $_FILES["dosya"]["tmp_name"];
        $path = 'dosyalar/'. $_FILES['dosya']['name'];
        if (move_uploaded_file($tmp_name, $path)) {
            echo 'Dosya yüklendi.';
            $b64Doc = base64_encode(file_get_contents($path));
            return $b64Doc;
        } else {
            echo 'Dosya yüklemede hata.';
        }
        unlink($tmp_name);
    }
}

$res = files();
if ($res == "error"):
    echo "error";
else:
    $type = $_FILES['dosya']['type'];
    $name = $_FILES['dosya']['name'];
    echo $type;

    yolla($res,$name,$type);
endif;
function yolla($res,$name,$type){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://194.195.246.167:5000/DatabaseSaveFile',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('TCNo' => $_SESSION['user'],
            'fileType' => $type,
            'Base64' => $res,
            'fileName' => $name,
            'Purpose' => 'cap'),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;


    unlink('dosyalar/'. $_FILES['dosya']['name']);
    echo $response;

    if($response=="True"):
        header("Location: /login.php");
    else:
        header("Location: /404.php");
    endif;
}
?>




