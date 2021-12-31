<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İntibak Başvurusu</title>
    <link rel="stylesheet" href="css/intibak.css">
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
            İNTİBAK BAŞVURUSU
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
            <select name="select2" id="select2">
                <option selected disabled>Seçim Yapınız</option>
                <option value="1">Bölüm 1</option>
                <option value="2">Bölüm 2</option>
            </select>
        </div>
        <div class="row">
            <p>Kayıtlı Fakülte:</p>
            <input type="text" placeholder="Kayıtlı Fakülte">
        </div>
        <div class="row">
            <p>Geçiş Türü:</p>
            <input type="text" placeholder="Kayıtlı Bölüm">
        </div>
        <div class="row">
            <p>Mevcut Yıl:</p>
            <input type="text" placeholder="Yerleştiği Yıl">
        </div>
        <div class="row">
            <p>Mevcut Yarıyıl:</p>
            <input type="text" placeholder="Başvurulan Fakülte">
        </div>
        <div class="row">
            <p>İntibak Edilecek Yarıyıl:</p>
            <input type="text" placeholder="Başvurulan Bölüm">
        </div>
        <div class="file-container">

            <label for="dilekceButton" class="custom-file-upload">
                Dilekçe Oluştur
            </label>
            <input id="dilekceButton" name="dosya" type="file" />

            <input href="" class="apply-button" type="submit" value="Dilekçe Yolla">
        </div>
    </div>
</body>

</html>