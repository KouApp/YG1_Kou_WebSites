<?php
session_start();



function gonder(){
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://194.195.246.167:5000/YatayGecisBasvurusu',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('KurumYG' => 'X',
            'KurumArasıYG' => 'O',
            'MerYerPuanYG' => 'O',
            'YurtDisiYG' => 'O',
            'AdSoyad' => $_POST['adsoyad'],
            'TCno' => $_POST['tcno'],
            'DogumTarihi' => $_POST['dgmtrh'],
            'Eposta' => $_POST['mail'],
            'GsmTel' => $_POST['tel'],
            'EvTel' => $_POST['evtel'],
            'TebligatAdres' => $_POST['adres'],
            'KayitliUniversite' => $_POST['kytuni'],
            'KayitliFakulte' => $_POST['kytfac'],
            'KayitliBolum' => $_POST['kytbolm'],
            'birinciOgretim' => 'X',
            'ikinciOgretim' => 'O',
            'SınıfYarıyıl' => $_POST['mvctsnf'],
            'DisiplinCezası' => $_POST['dsplnceza'],
            'NotOrt' => $_POST['notort'],
            'OgrenciNo' => $_POST['ogrno'],
            'KayitliYil' => $_POST['yrlsyıl'],
            'KayitliPuan' => $_POST['puan'],
            'YabancıDilPuan' => $_POST['ybncpuan'],
            'BasvurFakulte' => $_POST['bsvrfac'],
            'BasvurBolum' => $_POST['basvrbol'],
            'BasvurBirinciOgr' => 'X',
            'BasvurikinciOgr' => 'O',
            'BasvurPuan' => $_POST['bsvrpuan'],
            'Tarih' => $_POST['tarih']),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    return $response;

}
$res = gonder();
$manage = json_decode($res,true);
include 'BASE64.php';
$filename = $_POST['ogrno'];
if($res =="Kayitli"):
    echo "kayit var";
else:
    $name = base64topdf($manage['base64'],$filename);
    filedownload($name);
endif;
?>

