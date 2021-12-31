<?php
if(isset($_FILES["ufile"])){
    $tmp_name = $_FILES["ufile"]["tmp_name"];
    $name = $_FILES["ufile"]["name"];
    $file_path = $name;


    if(move_uploaded_file($tmp_name, $file_path)){
        echo 'Dosya yüklendi.';
    }else{
        echo 'Dosya yüklemede hata.';
    }
    unlink($tmp_name);

}