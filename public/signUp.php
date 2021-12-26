<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <link rel="stylesheet" href="css/signUp.css">
</head>

<body>
    <?php
    if (strlen($_SESSION['user']) == 0) {
        header("Location: http://127.0.0.1:8000/login.php");
    }
    ?>
    <div class="container">
        <div class="signup-header">
            KAYIT OL
        </div>

        <div class="row">
            <p>Öğrenci No:</p>
            <input type="text" placeholder="Öğrenci No">
        </div>
        <div class="row">
            <p>T.C. No:</p>
            <input type="text" placeholder="T.C. No">
        </div>
        <div class="row">
            <p>İsim:</p>
            <input type="text" placeholder="İsim">
        </div>
        <div class="row">
            <p>Soy İsim:</p>
            <input type="text" placeholder="Soy İsim">
        </div>
        <div class="row">
            <p>E-posta:</p>
            <input type="text" placeholder="E-posta">
        </div>
        <div class="row">
            <p>Telefon:</p>
            <input type="text" placeholder="Telefon">
        </div>
        <div class="row">
            <p>Ev Adresi:</p>
            <input type="text" placeholder="Ev Adresi">
        </div>
        <div class="row">
            <p>iş Adresi:</p>
            <input type="text" placeholder="İş Adresi">
        </div>
        <div class="row">
            <p>Doğum Tarihi:</p>
            <input type="text" placeholder="Doğum Tarihi">
        </div>
        <div class="row">
            <p>Üniversite:</p>
            <select name="select" id="select">
                <option selected disabled>Seçim Yapınız</option>
                <option value="1">Kocaeli Üniversitesi</option>
            </select>
        </div>
        <div class="row">
            <p>Fakülte:</p>
            <select name="select" id="select">
                <option selected disabled>Seçim Yapınız</option>
                <option value="1">Teknoloji Fakültesi</option>
                <option value="2">Fen-Edebiyat Fakültesi</option>
                <option value="3">Hukuk Fakültesi</option>
                <option value="4">Mühendislik Fakültesi</option>
                <option value="5">Sosyal Bilimler Fakültesi</option>
            </select>
        </div>
        <div class="row">
            <p>Bölüm:</p>
            <select name="select" id="select">
                <option selected disabled>Seçim Yapınız</option>
                <option value="1">Yasin</option>
                <option value="2">Buraya</option>
                <option value="3">Yardım</option>
                <option value="4">Etmen</option>
                <option value="5">Lazım</option>
            </select>
        </div>
        <div class="row">
            <p>Sınıf:</p>
            <select name="select" id="select">
                <option selected disabled>Seçim Yapınız</option>
                <option value="1">1. Sınıf</option>
                <option value="2">2. Sınıf</option>
                <option value="3">3. Sınıf</option>
                <option value="4">4. Sınıf</option>
            </select>
        </div>
        <div class="row">
            <p>Şifre:</p>
            <input type="password" placeholder="Şifre">
        </div>

        <div class="button-container">
            <input id="signUpButton" type="submit" value="Kayıt Ol">
            <input id="addPhotoButton" type="submit" value="Fotoğraf Yükle">
        </div>


    </div>
</body>

</html>