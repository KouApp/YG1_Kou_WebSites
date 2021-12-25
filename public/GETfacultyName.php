<?php
session_start();

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://194.195.246.167:5000/DatabaseGetFacultyName',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('Abbreviation' => 'KOU'),
));

$response = curl_exec($curl);

curl_close($curl);

$manage = json_decode($response,true);

$_SESSION['Faculty_1'] = $manage['1'];
$_SESSION['Faculty_2'] = $manage['2'];
$_SESSION['Faculty_3'] = $manage['3'];
$_SESSION['Faculty_4'] = $manage['4'];
$_SESSION['Faculty_5'] = $manage['5'];
