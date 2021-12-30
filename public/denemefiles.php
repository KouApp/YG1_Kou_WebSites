<?php
echo "awd";
$dosya = $_FILES['dosya']['tmp_name'];
copy($dosya, 'dosyalar/' . $_FILES['dosya']['name']);
$path = 'dosyalar/'. $_FILES['dosya']['name'];
$data = file_get_contents($path);
$base64 = base64_encode($data);
echo "awd";
echo $_FILES['dosya']['type'];
echo $_FILES['dosya']['tmp_name'];
if (isset($_FILES['dosya'])) {
    $hata = $_FILES['dosya']['error'];
    if ($hata != 0) {
        echo "hata";
    } else {
        $dosya = $_FILES['dosya']['tmp_name'];
        copy($dosya, 'dosyalar/' . $_FILES['dosya']['name']);
        $path = 'dosyalar/'. $_FILES['dosya']['name'];
        $data = file_get_contents($path);
        $base64 = base64_encode($data);
        echo "awd";
        echo $_FILES['dosya']['type'];
        echo $_FILES['dosya']['tmp_name'];
    }
}