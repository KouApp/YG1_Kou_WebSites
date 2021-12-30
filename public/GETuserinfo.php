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
$manage = json_decode($response,true);
$_SESSION['user_name']=$manage['Name'];
$_SESSION['user_surname']=$manage['Surname'];
$_SESSION['user_profilebase64']=$manage['ProfilePhotoBase64'];



header("Location: /userPanel.php");
?>