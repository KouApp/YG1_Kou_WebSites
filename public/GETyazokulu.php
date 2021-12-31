<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://194.195.246.167:5000/YazOkuluBasvurusu',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('Baskanlik' => $_POST['baskanlik'],
                                'Fakulte' => $_POST['select'],
                                'Bolum' => $_POST['select2'],
                                'OgrNo' => $_POST['ogrno'],
                                'AdSoyad' => $_POST['adsoyad'],
                                'YazUni' => $_POST['gcgıuni'],
                                'YazFakulte' => $_POST['gdcgfklte'],
                                'BolumSinif' => $_POST['ogrenmtur'],
                                'GsmTel' => $_POST['tel'],
                                'Email' => $_POST['eposta'],
                                'TebligatAdres' => $_POST['adres']),
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