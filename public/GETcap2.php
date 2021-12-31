<?php
session_start();
function files()
{
    if (isset($_FILES['dosya'])) {
        $hata = $_FILES['dosya']['error'];
        if ($hata != 0) {
            return "error";
        } else {
            $dosya = $_FILES['dosya']['tmp_name'];

            copy($dosya, 'dosyalar/' . $_FILES['dosya']['name']);
            $path = 'dosyalar/'. $_FILES['dosya']['name'];
            $data = file_get_contents($path);
            $base64 = base64_encode($data);
            return $base64;
        }
    }
}
$res = files();
if ($res == "error"):
    echo "error";
else:
    $type = $_FILES['dosya']['type'];
    $name = $_FILES['dosya']['name'];
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
    /*
    if($response=="True"):
        header("Location: /login.php");
    else:
        header("Location: /404.php");
    endif;*/
endif;
?>




