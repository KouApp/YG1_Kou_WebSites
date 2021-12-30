<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://194.195.246.167:5000/DatabasePasswordReset',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('StudentNo' => $_POST['student'],'TCNo' => $_POST['tc'],'PhoneNo' => $_POST['tel']),
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;
if ($response == "True"):

    header("Location: /login.php");
else:
    header("Location: /404.php");
endif;
?>
