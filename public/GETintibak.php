<?php
session_start();



$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://194.195.246.167:5000/MuafiyetBasvurusu',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('Bolum' => $_POST['select2'],
                                'Fakulte' => $_POST['select'],
                                'Yil' => $_POST['yil'],
                                'AdSoyad' => $_POST['adsoyad'],
                                'GecisYolu' => $_POST['gcsyol'],
                                'Yariyil' => $_POST['mevctyar'],
                                'OgrNo' => $_POST['ogrno'],
                                'intibakYariyil' => $_POST['yarıyıl']),
));

$response = curl_exec($curl);

curl_close($curl);
$manage = json_decode($response,true);
include 'BASE64.php';

if($response =="Kayitli"):
    echo "kayit var";
else:
    $name = base64topdf($manage['base64'],$_POST['ogrno']);
    filedownload($name);
endif;

?>