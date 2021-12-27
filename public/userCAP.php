<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÇAP Başvurusu</title>
    <link rel="stylesheet" href="css/userCAP.css">
</head>

<body>
    <?php
    if (strlen($_SESSION['user']) == 0) {
        header("Location: http://127.0.0.1:8000/login.php");
    }
    ?>

    <div class="user-info-container">
        <div class="user-info-img">
            <img src="data:image/png;base64,<?php echo $_SESSION['user_profilebase64']; ?>" alt="Red dot" />
        </div>
        <div class="user-info-text">
            <p id="studentName">
            <h1><?php echo $_SESSION['user_name']; ?> <?php echo $_SESSION['user_surname']; ?></h1>
            </p>
            <p id="studentNo">
            <h3><b><?php echo $_SESSION['user']; ?></b></h3>
            </p>
            <a href="logout.php">Çıkış Yap</a>
        </div>
    </div>

    <div class="container">
        <div class="ygb-header">
            ÇİFT ANADAL PROGRAMI BAŞVURUSU
        </div>

        <div class="row">
            <p>Ad Soyad:</p>
            <input type="text" placeholder="Ad Soyad">
        </div>

        <div class="row">
            <p>Öğrenci No:</p>
            <input type="text" placeholder="Öğrenci No">
        </div>

        <div class="row">
            <p>Fakülte:</p>
            <select name="select" id="select">
                <option selected disabled>Seçim Yapınız</option>
                <option value="1">Eğitim Fakültesi</option>
                <option value="2">Fen Edebiyat Fakültesi</option>
                <option value="3">İktisadi ve İdari Bilimler Fakültesi</option>
                <option value="4">İletişim Fakültesi</option>
                <option value="5">Mühendislik Fakültesi</option>
            </select>
        </div>

        <div class="row">
            <p>Bölüm:</p>
            <select name="select" id="select">
                <option selected disabled>Seçim Yapınız</option>
                <option value="1">Yasin</option>
                <option value="2">Buraya</option>
                <option value="3">Da</option>
                <option value="4">Yardım</option>
                <option value="5">Lazım</option>
            </select>
        </div>

        <div class="row">
            <p>Program:</p>
            <input type="text" placeholder="Program">
        </div>

        <div class="row">
            <p>Öğrenim Türü:</p>
            <input type="text" placeholder="Öğrenim Türü">
        </div>

        <div class="row">
            <p>Telefon:</p>
            <input type="text" placeholder="Telefon">
        </div>

        <div class="row">
            <p>E-posta:</p>
            <input type="text" placeholder="E-posta">
        </div>

        <div class="row">
            <p>Adres:</p>
            <input type="text" placeholder="Adres">
        </div>

        <div class="row">
            <p>İstenilen Bölüm:</p>
            <select name="select" id="select">
                <option selected disabled>Seçim Yapınız</option>
                <option value="1">Yasin</option>
                <option value="2">Buraya</option>
                <option value="3">Da</option>
                <option value="4">Yardım</option>
                <option value="5">Lazım</option>
            </select>
        </div>

        
        <div class="file-container">
            <input href="" id="fileButton" type="submit" value="Belge Gönder">
            <input href="" id="transkriptButton" type="submit" value="Transkript">
        </div>

        <div class="file-container2">
            <input href="" id="applyButton" class="apply-button" type="submit" value="Başvur">
        </div>
    </div>
</body>

</html>