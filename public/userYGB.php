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
        <script src = "menu.js"></script>
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
            <input type="text" name="adsoyad" value="ad soyad" placeholder="Ad Soyad">
        </div>
        <div class="row">
            <p>T.C. No:</p>
            <input type="text" name="tcno" placeholder="T.C. No" value="55555">
        </div>
        <div class="row">
            <p>Doğum Tarihi:</p>
            <input type="text" name="dgmtrh" placeholder="Doğum Tarihi" value="15.15.15">
        </div>
        <div class="row">
            <p>Telefon:</p>
            <input type="text" name="tel" placeholder="Telefon" value="055512232">
        </div>
        <div class="row">
            <p>E-Posta:</p>
            <input type="text" name="mail" placeholder="E-Posta" value="example@hotma">
        </div>
        <div class="row">
            <p>Adres:</p>
            <input type="text" name="adres"  placeholder="Adres" value="addres">
        </div>
        <div class="row">
            <p>Kayıtlı Üniversite:</p>
            <input type="text" name="kytuni" placeholder="Kayıtlı Üniversite" value="kayitüni">
        </div>
        <div class="row">
            <p>Kayıtlı Fakülte:</p>
            <input type="text" name="kytfac"  placeholder="Kayıtlı Fakülte" value="kayit fak">
        </div>
        <div class="row">
            <p>Kayıtlı Bölüm:</p>
            <input type="text" name="kytbolm" placeholder="Kayıtlı Bölüm" value="kayitli bölm">
        </div>
        <div class="row">
            <p>Öğrenci No:</p>
            <input type="text" name="ogrno" placeholder="Öğrenci No" value="1881818">
        </div>
        <div class="row">
            <p>Yerleştiği Yıl:</p>
            <input type="text" name="yrlsyıl" placeholder="Yerleştiği Yıl" value="2020">
        </div>
        <div class="row">
            <p>Başvurulan Fakülte:</p>
            <input type="text" name="bsvrfac" placeholder="Başvurulan Fakülte" value="basvurulan fakulte">
        </div>
        <div class="row">
            <p>Başvurulan Bölüm:</p>
            <input type="text" name="basvrbol" placeholder="Başvurulan Bölüm" value="basvr bolm">
        </div>
        <div class="row">
            <p>Ev Telefonu:</p>
            <input type="text" name="evtel" placeholder="Ev Telefonu" value="ev tel">
        </div>
        <div class="row">
            <p>Tarih:</p>
            <input type="text" name="tarih" placeholder="Tarih" value="tarih">
        </div>
        <div class="row">
            <p>Mevcut Sınıf:</p>
            <input type="text" name="mvctsnf" placeholder="Mevcut Sınıf" value="mevut sınıf">
        </div>
        <div class="row">
            <p>Mevcut Yarıyıl:</p>
            <input type="text" placeholder="Mevcut Yarıyıl" value="6">
        </div>
        <div class="row">
            <p>Not Ortalaması:</p>
            <input type="text" name="notort" placeholder="Not Ortalaması" value="2.2">
        </div>
        <div class="row">
            <p>Kayıt Olunan Puan:</p>
            <input type="text" name="puan" placeholder="Kayıt Olunan Puan" value="220">
        </div>
        <div class="row">
            <p>Başvurulan Puan:</p>
            <input type="text" name="bsvrpuan" placeholder="Başvurulan Puan" value="280">
        </div>
        <div class="row">
            <p>Başvurulan Öğrenim:</p>
            <input type="text" name="bsvrornm" placeholder="Başvurulan Öğrenim" value="1ad">
        </div>
        <div class="row">
            <p>Yabancı Dil Puanı:</p>
            <input type="text" name="ybncpuan" placeholder="Yabancı Dil Puanı" value="80">
        </div>
        <div class="row">
            <p>Disiplin Cezası:</p>
            <input type="text" name="dsplnceza" placeholder="Disiplin Cezası" value="yokad">
        </div>
            <input type="submit" class="apply-button" value="basvuru indir"></input>
        </form>
        <form action="GETygb2.php" method="post" enctype="multipart/form-data">
        <div class="file-container">
            <p class="file-header">GEREKEN DOSYALAR</p>
            <div class="file-row">
                <div class="file-column">
                    <h3><b>Transkript</b></h3>
                    <p name="transkript-file">Yüklenmedi</p>
                    <input type="file" name="trans" class="file-button"></input>
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
                <select name="select2" id="select2">
                    <option selected disabled>Seçim Yapınız</option>
                    <option value="1">Birinci Öğretim</option>
                    <option value="2">İkinci Öğretim</option>
                </select>
            </div>
            <div class="row">
                <p>Ad Soyad:</p>
                <input type="text" name="adsoyad" placeholder="Ad Soyad">
            </div>
            <div class="row">
                <p>T.C. No:</p>
                <input type="text" name="tcno" placeholder="T.C. No">
            </div>
            <div class="row">
                <p>Doğum Tarihi:</p>
                <input type="text" name="dgmtrh" placeholder="Doğum Tarihi">
            </div>
            <div class="row">
                <p>Telefon:</p>
                <input type="text" name="tel" placeholder="Telefon">
            </div>
            <div class="row">
                <p>E-Posta:</p>
                <input type="text" name="mail" placeholder="E-Posta">
            </div>
            <div class="row">
                <p>Adres:</p>
                <input type="text" name="adres" placeholder="Adres">
            </div>
            <div class="row">
                <p>Kayıtlı Üniversite:</p>
                <input type="text" name="kytuni" placeholder="Kayıtlı Üniversite">
            </div>
            <div class="row">
                <p>Kayıtlı Fakülte:</p>
                <input type="text" name="kytfac" placeholder="Kayıtlı Fakülte">
            </div>
            <div class="row">
                <p>Kayıtlı Bölüm:</p>
                <input type="text" name="kytbolm" placeholder="Kayıtlı Bölüm">
            </div>
            <div class="row">
                <p>Öğrenci No:</p>
                <input type="text" name="ogrno" placeholder="Öğrenci No">
            </div>
            <div class="row">
                <p>Yerleştiği Yıl:</p>
                <input type="text" name="yrlsyıl" placeholder="Yerleştiği Yıl">
            </div>
            <div class="row">
                <p>Başvurulan Fakülte:</p>
                <input type="text" name="bsvrfac" placeholder="Başvurulan Fakülte">
            </div>
            <div class="row">
                <p>Başvurulan Bölüm:</p>
                <input type="text" name="basvrbol" placeholder="Başvurulan Bölüm">
            </div>
            <div class="row">
                <p>Ev Telefonu:</p>
                <input type="text" name="evtel" placeholder="Ev Telefonu">
            </div>
            <div class="row">
                <p>Tarih:</p>
                <input type="text" name="tarih" placeholder="Tarih">
            </div>
            <div class="row">
                <p>Mevcut Sınıf:</p>
                <input type="text" name="mvctsnf" placeholder="Mevcut Sınıf">
            </div>
            <div class="row">
                <p>Mevcut Yarıyıl:</p>
                <input type="text" placeholder="Mevcut Yarıyıl">
            </div>
            <div class="row">
                <p>Not Ortalaması:</p>
                <input type="text" name="notort" placeholder="Not Ortalaması">
            </div>
            <div class="row">
                <p>Kayıt Olunan Puan:</p>
                <input type="text" name="puan" placeholder="Kayıt Olunan Puan">
            </div>
            <div class="row">
                <p>Başvurulan Puan:</p>
                <input type="text" name="bsvrpuan" placeholder="Başvurulan Puan">
            </div>
            <div class="row">
                <p>Başvurulan Öğrenim:</p>
                <input type="text" name="bsvrornm" placeholder="Başvurulan Öğrenim">
            </div>
            <div class="row">
                <p>Yabancı Dil Puanı:</p>
                <input type="text" name="ybncpuan" placeholder="Yabancı Dil Puanı">
            </div>
            <div class="row">
                <p>Disiplin Cezası:</p>
                <input type="text" name="dsplnceza" placeholder="Disiplin Cezası">
            </div>
            <input type="submit" class="apply-button" value="basvuru indir"></input>
        </form>
        <form action="GETygb.php" method="post" enctype="multipart/form-data">
            <div class="file-container">
                <p class="file-header">GEREKEN DOSYALAR</p>
                <div class="file-row">
                    <div class="file-column">
                        <h3><b>Transkript</b></h3>
                        <p name="transkript-file">Yüklenmedi</p>
                        <input type="file" name="trans" class="file-button"></input>
                    </div>


                    <div class="file-column">
                        <h3><b>Disiplin Cezası</b></h3>
                        <p name="dicipline-file">disiplin.pdf</p>
                        <input type="file" name="disiplin" class="file-button"></input>
                    </div>
                </div>

                <div class="file-row">
                    <div class="file-column">
                        <h3><b>ÖSYM Sınav Belgesi</b></h3>
                        <p name="exam-file">sinavsonuc.pdf</p>
                        <input type="file" name="sinav" class="file-button"></input>
                    </div>

                    <div class="file-column">
                        <h3><b>Dekont</b></h3>
                        <p name="decont-file">Yüklenmedi</p>
                        <input type="file" name="dekont" class="file-button"></input>
                    </div>
                </div>

                <div class="file-column">
                    <h3><b>Basvuru belgesi</b></h3>
                    <p name="decont-file">Yüklenmedi</p>
                    <input type="file" name="basvur" class="file-button"></input>
                </div>
            </div>


                <input type="submit" class="apply-button"></input>
            </div>
        </form>

    </div>

</body>

</html>