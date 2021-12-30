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
        <form action="GETcap.php" method="post" enctype="multipart/form-data">

        <div class="row">
            <p>Öğrenci No:</p>
            <input type="text" name="ogrno" placeholder="Öğrenci No">
        </div>

        <div class="row">
            <p>Fakülte:</p>
            <select name="select" id="select">
                <option selected disabled>Seçim Yapınız</option>
                <option value="Eğitim Fakültesi">Eğitim Fakültesi</option>
                <option value="Fen Edebiyat Fakültesi">Fen Edebiyat Fakültesi</option>
                <option value="İktisadi ve İdari Bilimler Fakültesi">İktisadi ve İdari Bilimler Fakültesi</option>
                <option value="İletişim Fakültesi">İletişim Fakültesi</option>
                <option value="Mühendislik Fakültesi">Mühendislik Fakültesi</option>
            </select>
        </div>

        <div class="row">
            <p>Bölüm:</p>
            <select name="select2" id="select2">
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
            <input type="text" name="prog" placeholder="Program">
        </div>

        <div class="row">
            <p>Öğrenim Türü:</p>
            <input type="text" name="ogrenm" placeholder="Öğrenim Türü">
        </div>

            <div class="row">
                <p>Sınıf:</p>
                <input type="text" name="classe" placeholder="Telefon">
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
                <option value="1">Yasin</option>
                <option value="2">Buraya</option>
                <option value="3">Da</option>
                <option value="4">Yardım</option>
                <option value="5">Lazım</option>
            </select>
        </div>

            <script type="text/javascript">
                function uni(sel) {
                    addOpt(sel.options[sel.selectedIndex].text);
                }
                function addOpt(deg)
                {
                    let tekno = ["burası","teknoloji","fakultesi"];
                    let fen = ["burası","fen","fakultesi"];
                    let hukuk = ["burası","hukuk","fakultesi"];
                    removeOptions(document.getElementById('select3'));
                    if(deg =="Teknoloji Fakültesi"){
                        for (var i=0; i < tekno.length; i++) {
                            var opt = document.createElement("option");
                            document.getElementById("select3").options.add(opt);
                            opt.text = tekno[i];
                            opt.value = tekno[i];
                        }
                    }
                    if(deg =="Fen-Edebiyat Fakültesi"){
                        for (var i=0; i < fen.length; i++) {
                            var opt = document.createElement("option");
                            document.getElementById("select3").options.add(opt);
                            opt.text = fen[i];
                            opt.value = fen[i];
                        }
                    }

                }
                function removeOptions(selectElement) {
                    var i, L = selectElement.options.length - 1;
                    for(i = L; i >= 0; i--) {
                        selectElement.remove(i);
                    }
                }
            </script>
        <div class="file-container">
            <input href="" id="fileButton" type="submit" value="Belge Gönder">
            <input href="" id="transkriptButton" type="submit" value="Transkript">
        </div>

        <div class="file-container2">
            <input href="" id="applyButton" class="apply-button" type="submit" value="Başvur">
        </div>
        </form>
    </div>
</body>

</html>