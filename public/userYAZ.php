<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yaz Okulu Başvurusu</title>
    <link rel="stylesheet" href="css/userYAZ.css">
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
            YAZ OKULU BAŞVURUSU
        </div>
        <form action="GETyazokulu.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <p>Ad Soyad:</p>
                <input type="text" name="adsoyad" placeholder="Ad Soyad">
            </div>
            <div class="row">
                <p>Öğrenim Türü:</p>
                <input type="text" name="ogrenmtur" placeholder="Öğrenim Türü">
            </div>
            <div class="row">
                <p>Öğrenci No:</p>
                <input type="text" name="ogrno" placeholder="Öğrenci No">
            </div>
            <div class="row">
                <p>Fakülte:</p>
                <select name="select2" id="select2" onChange="uni(this);">
                    <option selected disabled>Seçim Yapınız</option>
                    <option value="egitim">Eğitim Fakültesi</option>
                    <option value="fen">Fen-Edebiyat Fakültesi</option>
                    <option value="iktisat">İktisadi ve İdari Bilimler Fakültesi</option>
                    <option value="muh">Mühendislik Fakültesi</option>
                    <option value="iletisim">İletişim Fakültesi</option>
                </select>
            </div>
            <div class="row">
                <p>Bölüm:</p>
                <select name="select" id="select">
                    <option selected disabled>Seçim Yapınız</option>

                </select>
            </div>
            <script type="text/javascript">

                function uni(sel) {
                    addOpt(sel.options[sel.selectedIndex].value);
                }

                function addOpt(deg) {
                    let egitim = ["Fen bilgisi öğretmenliği", "İngilizce öğretmenliği", "Okul öncesi öğretmenliği","Rehberlik ve psikolojik danışmanlık","Sınıf öğretmenliği"];
                    let fen = ["Matematik", "Fizik", "Kimya","Tarih","Arkeoloji"];
                    let iletisim = ["Gazetecilik", "Halkla İlişkiler ve Tanıtım", "Radyo Televizyon ve Sinema","Görsel İletişim Tasarımı","Reklamcılık"];
                    let muh = ["Bilgisayar Mühendisliği", "Elektronik ve Haberleşme Mühendisliği", "Mekatronik Mühendisliği","Elektrik Mühendisliği","Endüstri Mühendisliği"];
                    let iktisat = ["Çalışma Ekonomisi ve Endüstri İlişkileri", "İktisat", "İşletme","Siyaset Bilimi ve Kamu Yönetimi","Uluslararası İlişkiler"];
                    removeOptions(document.getElementById('select'));
                    if (deg == "egitim") {
                        for (var i = 0; i < egitim.length; i++) {
                            var opt = document.createElement("option");
                            document.getElementById("select").options.add(opt);
                            opt.text = egitim[i];
                            opt.value = egitim[i];
                        }
                    }
                    if (deg == "fen") {
                        for (var i = 0; i < fen.length; i++) {
                            var opt = document.createElement("option");
                            document.getElementById("select").options.add(opt);
                            opt.text = fen[i];
                            opt.value = fen[i];
                        }
                    }
                    if (deg == "iletisim") {
                        for (var i = 0; i < iletisim.length; i++) {
                            var opt = document.createElement("option");
                            document.getElementById("select").options.add(opt);
                            opt.text = iletisim[i];
                            opt.value = iletisim[i];
                        }
                    }
                    if (deg == "muh") {
                        for (var i = 0; i < muh.length; i++) {
                            var opt = document.createElement("option");
                            document.getElementById("select").options.add(opt);
                            opt.text = muh[i];
                            opt.value = muh[i];
                        }
                    }
                    if (deg == "iktisat") {
                        for (var i = 0; i < iktisat.length; i++) {
                            var opt = document.createElement("option");
                            document.getElementById("select").options.add(opt);
                            opt.text = iktisat[i];
                            opt.value = iktisat[i];
                        }
                    }

                }

                function removeOptions(selectElement) {
                    var i, L = selectElement.options.length - 1;
                    for (i = L; i >= 0; i--) {
                        selectElement.remove(i);
                    }
                }
            </script>
            <div class="row">
                <p>Başkanlık:</p>
                <input type="text" name="baskanlik" placeholder="Başkanlık">
            </div>
            <div class="row">
                <p>Telefon:</p>
                <input type="text" name="tel" placeholder="Telefon">
            </div>
            <div class="row">
                <p>E-posta:</p>
                <input type="text" name="eposta" placeholder="E-posta">
            </div>
            <div class="row">
                <p>Adres:</p>
                <input type="text" name="adres" placeholder="Adres">
            </div>
            <div class="row">
                <p>Gideceği Üniversite:</p>
                <input type="text" name="gcgıuni" placeholder="Gideceği Üniversite">
            </div>
            <div class="row">
                <p>Gideceği Fakülte:</p>
                <input type="text" name="gdcgfklte" placeholder="Gideceği Fakülte">
            </div>
            <div class="file-container">
                <input id="applyButton" type="submit" value="Belge indir">

            </div>
        </form>
        <form action="GETyazokulu2.php" method="post" enctype="multipart/form-data">
            <div class="file-container">
                <input id="applyButton" type="submit" value="Başvur">

                <label for="fileButton" class="custom-file-upload">
                    Belge Gönder
                </label>
                <input id="fileButton" name="dosya" type="file" />
            </div>
        </form>
    </div>
</body>

</html>