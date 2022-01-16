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
            ÇİFT ANADAL PROGRAMI BAŞVURUSU
        </div>
        <form action="GETcap.php" method="post" enctype="multipart/form-data">

            <div class="row">
                <p>Öğrenci No:</p>
                <input type="text" name="ogrno" placeholder="Öğrenci No">
            </div>

            <div class="row">
                <p>Fakülte:</p>
                <select name="select" id="select" onchange="uni(this);">
                    <option selected disabled>Seçim Yapınız</option>
                    <option value="egitim">Eğitim Fakültesi</option>
                    <option value="fen">Fen Edebiyat Fakültesi</option>
                    <option value="iktisat">İktisadi ve İdari Bilimler Fakültesi</option>
                    <option value="iletisim">İletişim Fakültesi</option>
                    <option value="muh">Mühendislik Fakültesi</option>
                </select>
            </div>

            <div class="row">
                <p>Bölüm:</p>
                <select name="select2" id="select2" onchange="uni2(this);">
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
                    let muh = ["Bilgisayar Mühendisliği", "Elektronik ve Haberleşme Mühendisliği", "Mekatronik Mühendisligi","Elektrik Mühendisliği","Endüstri Mühendisliği"];
                    let iktisat = ["Çalışma Ekonomisi ve Endüstri İlişkileri", "İktisat", "İşletme","Siyaset Bilimi ve Kamu Yönetimi","Uluslararası İlişkiler"];
                    removeOptions(document.getElementById('select2'));
                    if (deg == "egitim") {
                        for (var i = 0; i < egitim.length; i++) {
                            var opt = document.createElement("option");
                            document.getElementById("select2").options.add(opt);
                            opt.text = egitim[i];
                            opt.value = egitim[i];
                        }
                    }
                    if (deg == "fen") {
                        for (var i = 0; i < fen.length; i++) {
                            var opt = document.createElement("option");
                            document.getElementById("select2").options.add(opt);
                            opt.text = fen[i];
                            opt.value = fen[i];
                        }
                    }
                    if (deg == "iletisim") {
                        for (var i = 0; i < iletisim.length; i++) {
                            var opt = document.createElement("option");
                            document.getElementById("select2").options.add(opt);
                            opt.text = iletisim[i];
                            opt.value = iletisim[i];
                        }
                    }
                    if (deg == "muh") {
                        for (var i = 0; i < muh.length; i++) {
                            var opt = document.createElement("option");
                            document.getElementById("select2").options.add(opt);
                            opt.text = muh[i];
                            opt.value = muh[i];
                        }
                    }
                    if (deg == "iktisat") {
                        for (var i = 0; i < iktisat.length; i++) {
                            var opt = document.createElement("option");
                            document.getElementById("select2").options.add(opt);
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
                <p>Program:</p>
                <input type="text" name="prog" placeholder="Program">
            </div>

            <div class="row">
                <p>Öğrenim Türü:</p>
                <input type="text" name="ogrenm" placeholder="Öğrenim Türü">
            </div>

            <div class="row">
                <p>Sınıf:</p>
                <input type="text" name="classe" placeholder="Sınıf">
            </div>
            <div class="row">
                <p>Telefon:</p>
                <input type="text" name="tel" placeholder="Telefon">
            </div>

            <div class="row">
                <p>E-posta:</p>
                <input type="text" name="mail" placeholder="E-posta">
            </div>

            <div class="row">
                <p>Adres:</p>
                <input type="text" name="adres" placeholder="Adres">
            </div>

            <div class="row">
                <p>İstenilen Bölüm:</p>
                <select name="select3" id="select3">
                    <option selected disabled>Seçim Yapınız</option>

                </select>
            </div>
            <script type="text/javascript">

                function uni2(sel) {
                    addOpt2(sel.options[sel.selectedIndex].value);
                }

                function addOpt2(deg) {
                    let mekatronik = ["Elektronik ve Haberleşme Mühendisliği", "Elektrik Mühendisliği", "Makine Mühendisliği"];
                    let endustri = ["Çevre Mühendisliği", "Elektronik ve Haberleşme Mühendisliği","Bilgisayar Mühendisliği", "İnşaat Mühendisliği", "Makine Mühendisliği"];
                    let elektronik = ["Bilgisayar Mühendisliği", "Elektrik Mühendisliği", "Endüstri Mühendisliği","Mekatronik Mühendisliği"];
                    let elktrik = ["Elektronik ve Haberleşme Mühendisliği", "Bilgisayar Mühendisliği", "Mekatronik Mühendisliği"];
                    let bilgisayar = ["Elektronik ve Haberleşme Mühendisliği", "Elektrik Mühendisliği"];
                    removeOptions2(document.getElementById('select3'));
                    if (deg == "Mekatronik Mühendisligi") {
                        for (var i = 0; i < mekatronik.length; i++) {ekle(mekatronik[i]);}}
                    if (deg == "Endüstri Mühendisliği") {
                        for (var i = 0; i < endustri.length; i++) {ekle(endustri[i]);}}
                    if (deg == "Elektronik ve Haberleşme Mühendisliği") {
                        for (var i = 0; i < elektronik.length; i++) {ekle(elektronik[i]);}}
                    if (deg == "Elektrik Mühendisliği") {
                        for (var i = 0; i < elktrik.length; i++) {ekle(elktrik[i]);}}
                    if (deg == "Bilgisayar Mühendisliği") {
                        for (var i = 0; i < bilgisayar.length; i++) {ekle(bilgisayar[i]);}}
                    let fenbilg = ["Rehberlik ve Psikolojik Danışmanlık", "İşletme", "Fizik","Matematik","Kimya","Biyoloji"];
                    let ingilizce = ["Rehberlik ve Psikolojik Danışmanlık", "İşletme","Tarih", "Türk Dili ve Edebiyatı", "İngiliz Dili ve Edebiyatı","Halkla İlişkiler ve Tanıtım"];
                    let okuloncesi = ["Rehberlik ve Psikolojik Danışmanlık", "İşletme", "Tarih","Türk Dili ve Edebiyatı","Sosyoloji"];
                    let sınıfogr = ["Rehberlik ve Psikolojik Danışmanlık", "Okul Öncesi Öğretmenliği", "İngilizce Öğretmenliği","İşletme","Sosyoloji","Tarih","Felsefe","Türk Dİli Ve Edebiyatı","Gazetecilik","Halkla İlişkiler ve Tanıtım"];
                    let arkeoloji = ["Rehberlik ve Psikolojik Danışmanlık", "İktisat","Siyaset Bilimi ve Kamu Yönetimi","Uluslararası İlişkiler","Çalışma Ekonomisi Ve Endüstri İlişkileri","Sosyoloji","Felsefe","Türk Dili ve Edebiyatı","Tarih"];

                    if (deg == "Fen bilgisi öğretmenliği") {
                        for (var i = 0; i < fenbilg.length; i++) {ekle(fenbilg[i]);}}
                    if (deg == "İngilizce öğretmenliği") {
                        for (var i = 0; i < ingilizce.length; i++) {ekle(ingilizce[i]);}}
                    if (deg == "Okul öncesi öğretmenliği") {
                        for (var i = 0; i < okuloncesi.length; i++) {ekle(okuloncesi[i]);}}
                    if (deg == "Sınıf öğretmenliği") {
                        for (var i = 0; i < sınıfogr.length; i++) {ekle(sınıfogr[i]);}}
                    if (deg == "Arkeoloji") {
                        for (var i = 0; i < arkeoloji.length; i++) {ekle(arkeoloji[i]);}}
                }
                function ekle(degisken){
                    var opt = document.createElement("option");
                    document.getElementById("select3").options.add(opt);
                    opt.text = degisken;
                }
                function removeOptions2(selectElement) {
                    var i, L = selectElement.options.length - 1;
                    for (i = L; i >= 0; i--) {
                        selectElement.remove(i);
                    }
                }
            </script>

            <div class="file-container">
                <input href="" id="fileButton" type="submit" value="Belge indir">
            </div>
        </form>
        <form action="GETcap2.php" method="post" enctype="multipart/form-data">
            <div class="file-container2">
                <label for="transkriptButton" class="custom-file-upload">
                    Transkript
                </label>
                <input id="transkriptButton" name="dosya" type="file" />
                
                <input href="" id="applyButton" class="apply-button" type="submit" value="Başvur">
            </div>
        </form>
    </div>
</body>

</html>