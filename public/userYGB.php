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
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <div id="navigation">
        <script src="menu.js"></script>
    </div>
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
            YATAY GEÇİŞ BAŞVURUSU
        </div>
        <form action="GETygb.php" method="post" enctype="multipart/form-data">

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
                <select name="select2" id="select2">
                    <option selected disabled>Seçim Yapınız</option>
                    <option value="1">Birinci Öğretim</option>
                    <option value="2">İkinci Öğretim</option>
                </select>
            </div>
            <div class="row">
                <p>Ad Soyad:</p>
                <input type="text" name="adsoyad" value="Yasin Sahin" placeholder="Yasin Sahin">
            </div>
            <div class="row">
                <p>T.C. No:</p>
                <input type="text" name="tcno" placeholder="T.C. No" value="541541541">
            </div>
            <div class="row">
                <p>Doğum Tarihi:</p>
                <input type="text" name="dgmtrh" placeholder="Doğum Tarihi" value="15.12.95">
            </div>
            <div class="row">
                <p>Telefon:</p>
                <input type="text" name="tel" placeholder="Telefon" value="05418523636">
            </div>
            <div class="row">
                <p>E-Posta:</p>
                <input type="text" name="mail" placeholder="E-Posta" value="example@hotmail.com">
            </div>
            <div class="row">
                <p>Adres:</p>
                <input type="text" name="adres" placeholder="Adres" value="Adresim">
            </div>
            <div class="row">
                <p>Kayıtlı Üniversite:</p>
                <input type="text" name="kytuni" placeholder="Kayıtlı Üniversite" value="Kocaeli Üniversitesi">
            </div>
            <div class="row">
                <p>Kayıtlı Fakülte:</p>
                <input type="text" name="kytfac" placeholder="Kayıtlı Fakülte" value="Teknoloji Fakültesi">
            </div>
            <div class="row">
                <p>Kayıtlı Bölüm:</p>
                <input type="text" name="kytbolm" placeholder="Kayıtlı Bölüm" value="Bilisim Sistemleri müh">
            </div>
            <div class="row">
                <p>Öğrenci No:</p>
                <input type="text" name="ogrno" placeholder="Öğrenci No" value="181181811">
            </div>
            <div class="row">
                <p>Yerleştiği Yıl:</p>
                <input type="text" name="yrlsyıl" placeholder="Yerleştiği Yıl" value="2022">
            </div>
            <div class="row">
                <p>Başvurulan Fakülte:</p>
                <input type="text" name="bsvrfac" placeholder="Başvurulan Fakülte" value="fakülte">
            </div>
            <div class="row">
                <p>Başvurulan Bölüm:</p>
                <input type="text" name="basvrbol" placeholder="Başvurulan Bölüm" value="basvur bolum">
            </div>
            <div class="row">
                <p>Ev Telefonu:</p>
                <input type="text" name="evtel" placeholder="Ev Telefonu" value="0555 111 22 22">
            </div>
            <div class="row">
                <p>Tarih:</p>
                <input type="text" name="tarih" placeholder="Tarih" value="04.12.22">
            </div>
            <div class="row">
                <p>Mevcut Sınıf:</p>
                <input type="text" name="mvctsnf" placeholder="Mevcut Sınıf" value="3">
            </div>
            <div class="row">
                <p>Mevcut Yarıyıl:</p>
                <input type="text" placeholder="Mevcut Yarıyıl" value="6">
            </div>
            <div class="row">
                <p>Not Ortalaması:</p>
                <input type="text" name="notort" placeholder="Not Ortalaması" value="3.2">
            </div>
            <div class="row">
                <p>Kayıt Olunan Puan:</p>
                <input type="text" name="puan" placeholder="Kayıt Olunan Puan" value="300">
            </div>
            <div class="row">
                <p>Başvurulan Puan:</p>
                <input type="text" name="bsvrpuan" placeholder="Başvurulan Puan" value="300">
            </div>
            <div class="row">
                <p>Başvurulan Öğrenim:</p>
                <input type="text" name="bsvrornm" placeholder="Başvurulan Öğrenim" value="1.Ögretim">
            </div>
            <div class="row">
                <p>Yabancı Dil Puanı:</p>
                <input type="text" name="ybncpuan" placeholder="Yabancı Dil Puanı" value="80">
            </div>
            <div class="row">
                <p>Disiplin Cezası:</p>
                <input type="text" name="dsplnceza" placeholder="Disiplin Cezası" value="yok">
            </div>
            <div class="button1">
                <input type="submit" class="apply-button" value="Başvuru İndir"></input>
            </div>

        </form>


        <form action="GETygb2.php" method="post" enctype="multipart/form-data">

            <div class="file-header">
                <p class="file-header">GEREKEN DOSYALAR</p>
            </div>

            <div class="buttons-container">
                <div class="row">
                    <a>Transkript: </a>
                    <label for="idTrans" class="custom-file-upload">
                        Belge Gönder
                    </label>
                    <input type="file" id="idTrans" name="trans" class="file-button" value="Trans">
                </div>
                <div class="row">
                    <a>Disiplin Belgesi: </a>
                    <label for="idDisiplin" class="custom-file-upload">
                        Belge Gönder
                    </label>
                    <input type="file" id="idDisiplin" name="disiplin" class="file-button">
                </div>
                <div class="row">
                    <a>Sınav Sonuç Belgesi: </a>
                    <label for="idSinav" class="custom-file-upload">
                        Belge Gönder
                    </label>
                    <input type="file" id="idSinav" name="sinav" class="file-button">
                </div>
                <div class="row">
                    <a>Dekont: </a>
                    <label for="idDekont" class="custom-file-upload">
                        Belge Gönder
                    </label>
                    <input type="file" id="idDekont" name="dekont" class="file-button">
                </div>
                <div class="row">
                    <a>Başvuru Belgesi: </a>
                    <label for="idBasvur" class="custom-file-upload">
                        Belge Gönder
                    </label>
                    <input type="file" id="idBasvur" name="basvur" class="file-button">
                </div>
                <div class="button1">
                    <input type="submit" class="apply-button" value="Başvur">
                </div>
            </div>

        </form>

    </div>

</body>

</html>