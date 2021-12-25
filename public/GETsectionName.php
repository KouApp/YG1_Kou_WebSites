<?php
session_start();
// Abrevesion post ile alman gerekiyor.
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://194.195.246.167:5000/DatabaseGetSectionName',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('Abbreviation' => 'IIF'),// buraya post geçmen gerekiyor
));

$response = curl_exec($curl);

curl_close($curl);

$manage = json_decode($response,true);

$_SESSION['Section_1'] = $manage['1'];
$_SESSION['Section_2'] = $manage['2'];
$_SESSION['Section_3'] = $manage['3'];
$_SESSION['Section_4'] = $manage['4'];
$_SESSION['Section_5'] = $manage['5'];

