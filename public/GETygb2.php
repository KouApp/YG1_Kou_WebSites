<?php
session_start();
function files($pur)
{
    if(isset($_FILES[$pur])) {
        $tmp_name = $_FILES[$pur]["tmp_name"];
        $path = 'dosyalar/'. $_FILES[$pur]['name'];
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
            'fileType' => 'application/pdf',
            'Base64' => $res,
            'fileName' => $trans,
            'Purpose' => 'ygb'),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    unlink('dosyalar/'. $_FILES[$pur]['name']);
    echo $response;
}
$trans = "trans";
$res = files("trans");
filesave($trans,$res,$trans);
$dsip = "disiplin";
$res2 = files("disiplin");
filesave($dsip,$res2,$dsip);
$sinav = "sinav";
$res3 = files("sinav");
filesave($sinav,$res3,$sinav);
$dekont = "dekont";
$res4 = files("dekont");
filesave($dekont,$res4,$dekont);
$basvur = "basvur";
$res5 = files("basvur");
filesave($basvur,$res5,$basvur);