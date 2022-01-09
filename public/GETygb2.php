<?php
session_start();

$tmp_name_trans = $_FILES["trans"]["tmp_name"];
$res_trans = base64_encode(file_get_contents($tmp_name_trans));
$tmp_name_disiplin = $_FILES["disiplin"]["tmp_name"];
$res_disiplin = base64_encode(file_get_contents($tmp_name_disiplin));
$tmp_name_sinav = $_FILES["sinav"]["tmp_name"];
$res_sinav = base64_encode(file_get_contents($tmp_name_sinav));
$tmp_name_dekont = $_FILES["dekont"]["tmp_name"];
$res_dekont = base64_encode(file_get_contents($tmp_name_dekont));
$tmp_name_basvur = $_FILES["basvur"]["tmp_name"];
$res_basvur = base64_encode(file_get_contents($tmp_name_basvur));

function filesave($pur,$res,$trans){

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
            'fileType' => $pur,
            'Base64' => $res,
            'fileName' => $trans,
            'Purpose' => 'ygb'),
    ));
    $response = curl_exec($curl);
    curl_close($curl);


}
$trans = "transkript";
filesave($_FILES["trans"]["type"],$res_trans,$trans);
$dsip = "disiplin";
filesave($_FILES["disiplin"]["type"],$res_disiplin,$dsip);
$sinav = "sinav";
filesave($_FILES["sinav"]["type"],$res_sinav,$sinav);
$dekont = "dekont";
filesave($_FILES["dekont"]["type"],$res_dekont,$dekont);
$basvur = "basvur";
filesave($_FILES["basvur"]["type"],$res_basvur,$basvur);
echo'<meta http-equiv="refresh" content="0;URL=kayitBasarili.php">';