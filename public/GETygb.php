<?php

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
                                'AdSoyad' => 'Yasin Sahin',
                                'TCno' => '55588822215',
                                'DogumTarihi' => '14.09.1990',
                                'Eposta' => 'example@gmail.com',
                                'GsmTel' => '0 555 222 21 21',
                                'EvTel' => '0 216 222 33 33',
                                'TebligatAdres' => 'Exammple Adress ',
                                'KayitliUniversite' => 'Kocaeli Universitesi',
                                'KayitliFakulte' => 'Teknoloji Fakultesi',
                                'KayitliBolum' => 'Bilisim Sistemleri muh',
                                'birinciOgretim' => 'X',
                                'ikinciOgretim' => 'O',
                                'SınıfYarıyıl' => '3-6',
                                'DisiplinCezası' => 'Yok',
                                'NotOrt' => '4.11',
                                'OgrenciNo' => '188188188',
                                'KayitliYil' => '2020',
                                'KayitliPuan' => '355',
                                'YabancıDilPuan' => 'Yok',
                                'BasvurFakulte' => 'Muhendiislik',
                                'BasvurBolum' => 'Bilgisayar muh',
                                'BasvurBirinciOgr' => 'X',
                                'BasvurikinciOgr' => 'O',
                                'BasvurPuan' => '380',
                                'Tarih' => '15.12.2021'),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
