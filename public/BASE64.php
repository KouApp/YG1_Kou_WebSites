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
