<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yatay Geçiş Başvurusu</title>
    <link rel="stylesheet" href="css/userYGB.css">
</head>

<body>

<a href="logout.php">Cıkıs Yap</a>


<div class="container">
    <div class="ygb-header">
        YATAY GEÇİŞ BAŞVURUSU
    </div>
    <form action="func.php" method="post">
    <div class="row">
        <p>Başvuru Türü:</p>
        <select name="select" id="select">
            <option selected disabled>Seçim Yapınız</option>
            <option value="1">Kurum İçi Yatay Geçiş</option>
            <option value="2">Kurumlar Arası Yatay Geçiş</option>
            <option value="3">Merkezi Yatay Geçiş</option>
            <option value="4">Yurtdışı Yatay Geçiş</option>
        </select>
    </div>

    <div class="row">
        <p>Öğrenci No:</p>
        <input type="text" name="ogrno" placeholder="Öğrenci No">
    </div>
        <input id="loginButton" type="submit" value="Giriş Yap">
    </form>


</div>

</body>

</html>