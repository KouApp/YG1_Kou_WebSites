<?php

$tmp_name = $_FILES["dosya"]["tmp_name"];
$res = base64_encode(file_get_contents($tmp_name));
if ($res == "error"):
    echo'<meta http-equiv="refresh" content="0;URL=kayitBasarisiz.php">';
else:

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://194.195.246.167:5000/DatabaseRegistry',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('StudentNo' => $_POST['ogrNo'],
            'TCNo' => $_POST['tc'],
            'Name' => $_POST['ad'],
            'Surname' => $_POST['soyad'],
            'Email' => $_POST['mail'],
            'PhoneNo' => $_POST['tel'],
            'HomeAddress' => $_POST['adres'],
            'BusinessAddress' => $_POST['adress'],
            'DateOfBrith' => $_POST['dgmtarihi'],
            'UniversityName' => $_POST['select'],
            'DepartmanName' => $_POST['select2'],
            'SectionName' => $_POST['select3'],
            'Rate' => $_POST['selectclass'],
            'Password' => $_POST['pass'],
            'ProfilePhotoBase64' => $res),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    if($response=="True"):
        echo'<meta http-equiv="refresh" content="0;URL=kayitBasarili.php">';

    else:
        echo'<meta http-equiv="refresh" content="0;URL=kayitBasarisiz.php">';

    endif;
endif;
?>




