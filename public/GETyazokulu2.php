<?php
session_start();


$tmp_name = $_FILES["dosya"]["tmp_name"];
$res = base64_encode(file_get_contents($tmp_name));

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
            'Purpose' => 'yaz'),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;


    if($response=="True"):
        echo'<meta http-equiv="refresh" content="0;URL=userPanel.php">';
        //header("Location: /userPanel.php");
    else:
        //header("Location: /404.php");
        echo'<meta http-equiv="refresh" content="0;URL=404.php">';
    endif;
}
?>




