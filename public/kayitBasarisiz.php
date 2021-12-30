<?php
session_start();
header("Refresh: 3; url=login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/basarisiz.css">

</head>
<body>
    <div class="container">
        <div class="content">
            <h2>BAŞARISIZ!</h2>
            <h4>Kayıt işlemin tamamlanamadı :(</h4>
            <p>3 saniye içerisinde otomatik olarak giriş yapma ekranına yönlendirileceksin.</p>
            <a href="login.php">Giriş Sayfası'na Dön</a>
        </div>
    </div>
</body>
</html>