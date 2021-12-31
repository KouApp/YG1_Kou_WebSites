<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/userDGS.css">

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
        <div class="dgs-header">
            DİKEY GEÇİŞ BAŞVURUSU
        </div>

        <div class="paragraph">
            <p id="firstp">E-kayıt yaptırmak isteyen adaylar, Yükseköğretim Kurulu Başkanlığının e-devlet kapısı üzerinden
                sunduğu "Üniversite E-Kayıt" uygulamasını tıklayarak 17 – 22 Eylül 2021 saat 23:59’a kadar elektronik kayıt
                işlemlerini gerçekleştirebileceklerdir.
            </p>
        </div>

        <div class="first-button-container">
            <input href="" id="linkButton" type="submit" value="Üniversite E-Kayıt Sayfasına Git">
        </div>

        <div class="paragraph">
            <p id="firstp">Kaydını yaptırmış olan adaylar aşağıdaki butonları kullanarak "Ders İçerikleri Belgesi" ve
                "Transkript" belgelerini gönderebilirler.
            </p>
        </div>

        <div class="button-container">
            <label for="subjectButton" class="custom-file-upload">
                Ders İçerikleri
            </label>
            <input href="" id="subjectButton" name="dosya" type="file" />

            <label for="transkriptButton" class="custom-file-upload">
                Transkript
            </label>
            <input href="" id="transkriptButton" name="dosya" type="file" />

        </div>
    </div>

</body>

</html>