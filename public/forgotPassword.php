<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şifre Yenileme</title>
    <link rel="stylesheet" href="css/forgotPassword.css">
</head>

<body>
    <div class="container">
        <div class="login-header">
            ŞİFREMİ UNUTTUM
        </div>
        <form action="GETlogin.php" method="post">

            <div class="input-container">
                <input type="text" id="studentno" name="student" placeholder="Öğrenci Numarası">
                <input type="text" id="tcno" name="tc" placeholder="T.C. Numarası">
                <input type="text" id="telno" name="tel" placeholder="Telefon Numarası">
            </div>

            <div class="input-buttons-container">
                <input id="loginButton" type="submit" value="Şifremi Yenile">
            </div>

        </form>
    </div>
</body>

</html>