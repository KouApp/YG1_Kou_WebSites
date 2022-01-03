<?php
function base64topdf($base64,$filename){
    $files = base64_decode($base64);
    $name = $filename.'.pdf';
    $fp = fopen($name, 'w');
    fwrite($fp, $files);
    fclose($fp);
    return $name;
}
function filedownload($path){
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$path");
    header("Content-Type: application/pdf");
    header("Content-Transfer-Encoding: binary");
    readfile($path);
    unlink($path);
}
function files()
{
    if(isset($_FILES["dosya"])) {
        $tmp_name = $_FILES["dosya"]["tmp_name"];
        $path = 'dosyalar/'. $_FILES['dosya']['name'];
        if (move_uploaded_file($tmp_name, $path)) {
            echo 'Dosya yüklendi.';
            $b64Doc = base64_encode(file_get_contents($path));
            return $b64Doc;
        } else {
            echo 'Dosya yüklemede hata.';
        }
        unlink($tmp_name);
    }
}