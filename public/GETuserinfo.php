<?php
session_start();

$user = $_SESSION['user'];
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://194.195.246.167:5000/DatabaseGetUsers',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('TCNo' => $user ),
));

$response = curl_exec($curl);

curl_close($curl);


$dilimler = explode(",", $response);

// NAME
$name = $dilimler[0];
$name_count = strlen($name);
$subname = substr($name,9,$name_count-10);

// USERNAME
$surname = $dilimler[1];
$surname_count = strlen($surname);
$subsurname = substr($surname,11,$surname_count-12);

// İMAGE BASE64
$base64 = $dilimler[2];
$base64_count = strlen($base64);
$subbase64 = substr($base64,22,$base64_count-25);


$_SESSION['user_name']=$subname;
$_SESSION['user_surname']=$subsurname;
$_SESSION['user_profilebase64']=$subbase64;

header("Location: http://127.0.0.1:8000/userPanel.php");