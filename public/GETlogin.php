<?php
session_start();

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://194.195.246.167:5000/DatabaseLogin',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('TCNo' => $_POST['login'],'Password' => $_POST['password']),
));

$response = curl_exec($curl);

curl_close($curl);

if ($response == "users"):
    $_SESSION['user']=$_POST['login'];
    header("Location: /GETuserinfo.php");
elseif ($response == "admins"):
    $_SESSION['user']=$_POST['login'];
    header("Location: /admin.php");
else:
    header("Location: /404.php");
endif;
?>
