<?php
function image()
{
    if (isset($_FILES['dosya'])) {
        $hata = $_FILES['dosya']['error'];
        if ($hata != 0) {
            return "error";
        } else {
            $dosya = $_FILES['dosya']['tmp_name'];
            copy($dosya, 'dosyalar/' . $_FILES['dosya']['name']);
            $path = 'dosyalar/'. $_FILES['dosya']['name'];
            $data = file_get_contents($path);
            $base64 = base64_encode($data);
            return $base64;
        }
    }
}
$res = image();
if ($res == "error"):
    echo "error";
else:

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://172.104.152.183:5000/DatabaseSaveFile',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('TCNo' => '13',
            'fileType' => 'application/msword',
            'Base64' => 'base64base64base64base64',
            'fileName' => 'trans',
            'Purpose' => 'dgs'),
    ));

    $response = curl_exec($curl);

    curl_close($curl);


    unlink('dosyalar/'. $_FILES['dosya']['name']);
    if($response=="True"):
        header("Location: /login.php");
    else:
        header("Location: /404.php");
    endif;
endif;
?>




