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
                    <option value="tekno">Teknoloji Fakültesi</option>
                    <option value="fen">Fen-Edebiyat Fakültesi</option>
                    <option value="hukuk">Hukuk Fakültesi</option>
                    <option value="muh">Mühendislik Fakültesi</option>
                    <option value="sosyal">Sosyal Bilimler Fakültesi</option>
                </select>
            </div>
            <script type="text/javascript">
                function uni(sel) {
                    addOpt(sel.options[sel.selectedIndex].text);
                }

                function addOpt(deg) {
                    let tekno = ["Bilişim Sistemleri Müh", "Biyomedikal Müh", "Otomativ Müh" , ];
                    let fen = ["burası", "fen", "fakultesi"];
                    let hukuk = ["burası", "hukuk", "fakultesi"];
                    removeOptions(document.getElementById('select3'));
                    if (deg == "tekno") {
                        for (var i = 0; i < tekno.length; i++) {
                            var opt = document.createElement("option");
                            document.getElementById("select3").options.add(opt);
                            opt.text = tekno[i];
                            opt.value = tekno[i];
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

                }

                function removeOptions(selectElement) {
                    var i, L = selectElement.options.length - 1;
                    for (i = L; i >= 0; i--) {
                        selectElement.remove(i);
                    }
                }
            </script>
            <div class="row">
                <p>Bölüm:</p>
                <select name="select3" id="select3">

                </select>
            </div>
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