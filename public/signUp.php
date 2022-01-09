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

    <div class="container">
        <div class="signup-header">
            KAYIT OL
        </div>
        <form action="GETsignup.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <p>Öğrenci No:</p>
                <input type="text" name="ogrNo" placeholder="Öğrenci No">
            </div>
            <div class="row">
                <p>T.C. No:</p>
                <input type="text" name="tc" placeholder="T.C. No">
            </div>
            <div class="row">
                <p>İsim:</p>
                <input type="text" name="ad" placeholder="İsim">
            </div>
            <div class="row">
                <p>Soy İsim:</p>
                <input type="text" name="soyad" placeholder="Soy İsim">
            </div>
            <div class="row">
                <p>E-posta:</p>
                <input type="text" name="mail" placeholder="E-posta">
            </div>
            <div class="row">
                <p>Telefon:</p>
                <input type="text" name="tel" placeholder="Telefon">
            </div>
            <div class="row">
                <p>Ev Adresi:</p>
                <input type="text" name="adres" placeholder="Ev Adresi">
            </div>
            <div class="row">
                <p>iş Adresi:</p>
                <input type="text" name="adress" placeholder="İş Adresi">
            </div>
            <div class="row">
                <p>Doğum Tarihi:</p>
                <input type="text" name="dgmtarihi" placeholder="Doğum Tarihi">
            </div>
            <div class="row">
                <p>Üniversite:</p>
                <select name="select" id="select">
                    <option selected disabled>Seçim Yapınız</option>
                    <option value="Kocaeli Üniversitesi">Kocaeli Üniversitesi</option>
                </select>
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
                <select name="select3" id="select3">
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
                    removeOptions(document.getElementById('select3'));
                    if (deg == "egitim") {
                        for (var i = 0; i < egitim.length; i++) {
                            var opt = document.createElement("option");
                            document.getElementById("select3").options.add(opt);
                            opt.text = egitim[i];
                            opt.value = egitim[i];
                        }
                    }
                    if (deg == "fen") {
                        for (var i = 0; i < fen.length; i++) {
                            var opt = document.createElement("option");
                            document.getElementById("select3").options.add(opt);
                            opt.text = fen[i];
                            opt.value = fen[i];
                        }
                    }
                    if (deg == "iletisim") {
                        for (var i = 0; i < iletisim.length; i++) {
                            var opt = document.createElement("option");
                            document.getElementById("select3").options.add(opt);
                            opt.text = iletisim[i];
                            opt.value = iletisim[i];
                        }
                    }
                    if (deg == "muh") {
                        for (var i = 0; i < muh.length; i++) {
                            var opt = document.createElement("option");
                            document.getElementById("select3").options.add(opt);
                            opt.text = muh[i];
                            opt.value = muh[i];
                        }
                    }
                    if (deg == "iktisat") {
                        for (var i = 0; i < iktisat.length; i++) {
                            var opt = document.createElement("option");
                            document.getElementById("select3").options.add(opt);
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
                <p>Sınıf:</p>
                <select name="selectclass" id="select">
                    <option selected disabled>Seçim Yapınız</option>
                    <option value="1">1. Sınıf</option>
                    <option value="2">2. Sınıf</option>
                    <option value="3">3. Sınıf</option>
                    <option value="4">4. Sınıf</option>
                </select>
            </div>
            <div class="row">
                <p>Şifre:</p>
                <input type="password" name="pass" placeholder="Şifre">
            </div>

            <div class="button-container">

                <input id="signUpButton" type="submit" name="gonder" value="Kayıt Ol">

                <label for="addPhotoButton" class="custom-file-upload">
                    Fotoğraf Yükle
                </label>
                <input id="addPhotoButton" name="dosya" type="file" />

            </div>
        </form>

    </div>
</body>

</html>