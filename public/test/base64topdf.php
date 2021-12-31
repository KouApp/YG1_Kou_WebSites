<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://194.195.246.167:5000/DatabaseGetinfo',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('TCNo' => '12'),
));

$response = curl_exec($curl);

curl_close($curl);


$manage = json_decode($response,true);


$files = base64_decode($manage[1]['Base64']);

$fp = fopen('examp.pdf', 'w');
fwrite($fp, $files);
fclose($fp);

$file = 'examp.pdf';
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=$file");
header("Content-Type: application/pdf");
header("Content-Transfer-Encoding: binary");

// Read the file from disk
readfile($file);
unlink($file);
