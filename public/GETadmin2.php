<?php
session_start();

function getapp($abbr){
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://194.195.246.167:5000/DatabaseGetApplication',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('TCNo' => '1515', 'Password' => '1515', 'Abbreviation' => $abbr, 'UserTC' => ''),
));

$response = curl_exec($curl);

curl_close($curl);

$_SESSION['temp'] = $response;
$_SESSION['bsvr'] = $_POST["select2"];
}
getapp($_POST["select2"]);
echo'<meta http-equiv="refresh" content="0;URL=admin.php">';