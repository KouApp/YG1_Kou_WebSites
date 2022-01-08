<?php
session_start();
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://194.195.246.167:5000/DatabaseAdminUpdatefile',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('TCNo' => $_POST["tc"],'Purpose' => $_SESSION['bsvr'],'control' => 'ONAYLI'),
));

$response = curl_exec($curl);

curl_close($curl);
echo'<meta http-equiv="refresh" content="0;URL=admin.php">';
