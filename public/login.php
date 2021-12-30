<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş</title>
    <link rel="stylesheet" href="css/login.css">

</head>

<body>

    <div class="container">
        <div class="login-header">
            SİSTEM GİRİŞ
        </div>
        <form action="GETlogin.php" method="post">

            <div class="input-container">
                <input type="text" id="loginNo" name="login" placeholder="Kullanıcı Numarası">
                <input type="password" id="loginPassword" name="password" placeholder="Şifre">
            </div>

            <div class="input-buttons-container">
                <input id="loginButton" type="submit" value="Giriş Yap">


                <input id="registerButton" type="button" value="Kayıt Ol" onclick="location.href='signUp.php';">

            </div>

            <div class="forgot-button-container">
                <div class="forgot-button">
                    <a href="forgotPassword.php" id="forgotButton">Şifremi Unuttum</a>
                </div>
            </div>
    </form>
    </div>

</body>

</html>