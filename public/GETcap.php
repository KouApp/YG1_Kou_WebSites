<?php
session_start();

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://194.195.246.167:5000/DatabaseGetCap',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('SectionName' => 'Kimya'),
));

$response = curl_exec($curl);

curl_close($curl);
$manage = json_decode($response,true);

for($i = 1; $i < count($manage); ++$i)
{
    echo $manage[$i] . "\n";
}
/*
print_r($manage);
$_SESSION['Cap_1'] = $manage['1'];
$_SESSION['Cap_2'] = $manage['2'];
$_SESSION['Cap_3'] = $manage['3'];
$_SESSION['Cap_4'] = $manage['4'];
$_SESSION['Cap_5'] = $manage['5'];
$_SESSION['Cap_6'] = $manage['6'];
$_SESSION['Cap_7'] = $manage['7'];
$_SESSION['Cap_8'] = $manage['8'];
$_SESSION['Cap_9'] = $manage['9'];



echo $_SESSION['Cap_1'];
echo "\n";
echo $_SESSION['Cap_2'];
echo "\n";
echo $_SESSION['Cap_3'];
echo "\n";
echo $_SESSION['Cap_4'];
echo "\n";
echo $_SESSION['Cap_5'];
echo "\n";
echo $_SESSION['Cap_6'];
echo "\n";
echo $_SESSION['Cap_7'];
echo "\n";
echo $_SESSION['Cap_8'];
echo "\n";
echo $_SESSION['Cap_9'];
echo "\n";
*/