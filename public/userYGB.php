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
    <div class="user-info-container">
        <p id="studentName">
        <h1>Kullanıcı : <?php echo $_SESSION['user_name']; ?>  <?php echo $_SESSION['user_surname']; ?></h1>
        <h1>T.C. no : <?php echo $_SESSION['user']; ?></h1>
        </p>
        <p id="studentNo">
        <h3><b></b></h3>
        </p>
    </div>

    <div class="container">
        <div class="ygb-header">
            YATAY GEÇİŞ BAŞVURUSU
        </div>

        <div class="row">
            <p>Başvuru Türü:</p>
            <select name="select" id="select">
                <option selected disabled>Seçim Yapınız</option>
                <option value="1">Kurum İçi Yatay Geçiş</option>
                <option value="2">Kurumlar Arası Yatay Geçiş</option>
                <option value="1">Merkezi Yatay Geçiş</option>
                <option value="2">Yurtdışı Yatay Geçiş</option>
            </select>
        </div>
        <div class="row">
            <p>Öğrenim Türü:</p>
            <select name="select" id="select">
                <option selected disabled>Seçim Yapınız</option>
                <option value="1">Birinci Öğretim</option>
                <option value="2">İkinci Öğretim</option>
            </select>
        </div>
        <div class="row">
            <p>Ad Soyad:</p>
            <input type="text" placeholder="Ad Soyad">
        </div>
        <div class="row">
            <p>T.C. No:</p>
            <input type="text" placeholder="T.C. No">
        </div>
        <div class="row">
            <p>Doğum Tarihi:</p>
            <input type="text" placeholder="Doğum Tarihi">
        </div>
        <div class="row">
            <p>Telefon:</p>
            <input type="text" placeholder="Telefon">
        </div>
        <div class="row">
            <p>E-Posta:</p>
            <input type="text" placeholder="E-Posta">
        </div>
        <div class="row">
            <p>Adres:</p>
            <input type="text" placeholder="Adres">
        </div>
        <div class="row">
            <p>Kayıtlı Üniversite:</p>
            <input type="text" placeholder="Kayıtlı Üniversite">
        </div>
        <div class="row">
            <p>Kayıtlı Fakülte:</p>
            <input type="text" placeholder="Kayıtlı Fakülte">
        </div>
        <div class="row">
            <p>Kayıtlı Bölüm:</p>
            <input type="text" placeholder="Kayıtlı Bölüm">
        </div>
        <div class="row">
            <p>Öğrenci No:</p>
            <input type="text" placeholder="Öğrenci No">
        </div>
        <div class="row">
            <p>Yerleştiği Yıl:</p>
            <input type="text" placeholder="Yerleştiği Yıl">
        </div>
        <div class="row">
            <p>Başvurulan Fakülte:</p>
            <input type="text" placeholder="Başvurulan Fakülte">
        </div>
        <div class="row">
            <p>Başvurulan Bölüm:</p>
            <input type="text" placeholder="Başvurulan Bölüm">
        </div>
        <div class="row">
            <p>Ev Telefonu:</p>
            <input type="text" placeholder="Ev Telefonu">
        </div>
        <div class="row">
            <p>Tarih:</p>
            <input type="text" placeholder="Tarih">
        </div>
        <div class="row">
            <p>Mevcut Sınıf:</p>
            <input type="text" placeholder="Mevcut Sınıf">
        </div>
        <div class="row">
            <p>Mevcut Yarıyıl:</p>
            <input type="text" placeholder="Mevcut Yarıyıl">
        </div>
        <div class="row">
            <p>Not Ortalaması:</p>
            <input type="text" placeholder="Not Ortalaması">
        </div>
        <div class="row">
            <p>Kayıt Olunan Puan:</p>
            <input type="text" placeholder="Kayıt Olunan Puan">
        </div>
        <div class="row">
            <p>Başvurulan Puan:</p>
            <input type="text" placeholder="Başvurulan Puan">
        </div>
        <div class="row">
            <p>Başvurulan Öğrenim:</p>
            <input type="text" placeholder="Başvurulan Öğrenim">
        </div>
        <div class="row">
            <p>Yabancı Dil Puanı:</p>
            <input type="text" placeholder="Yabancı Dil Puanı">
        </div>
        <div class="row">
            <p>Disiplin Cezası:</p>
            <input type="text" placeholder="Disiplin Cezası">
        </div>

        <div class="file-container">
            <p class="file-header">GEREKEN DOSYALAR</p>
            <div class="file-row">
                <div class="file-column">
                    <h3><b>Transkript</b></h3>
                    <p name="transkript-file">Yüklenmedi</p>
                    <a href="#" class="file-button">Ekle</a>
                </div>

                <div class="file-column">
                    <h3><b>Disiplin Cezası</b></h3>
                    <p name="dicipline-file">disiplin.pdf</p>
                    <a href="#" class="file-button">Ekle</a>
                </div>
            </div>

            <div class="file-row">
                <div class="file-column">
                    <h3><b>ÖSYM Sınav Belgesi</b></h3>
                    <p name="exam-file">sinavsonuc.pdf</p>
                    <a href="#" class="file-button">Ekle</a>
                </div>

                <div class="file-column">
                    <h3><b>Dekont</b></h3>
                    <p name="decont-file">Yüklenmedi</p>
                    <a href="#" class="file-button">Ekle</a>
                </div>
            </div>

            <a href="" class="apply-button">Başvur</a>
        </div>

    </div>

</body>

</html>