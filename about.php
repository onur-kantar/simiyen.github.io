<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Onur Kantar</title>

    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/b05edded2b.js" crossorigin="anonymous"></script>
    <script src="./scroll.js"></script>

    <script src="/menu.js"></script>

</head>

<body id="body">

    <div id="container">

        <!--LOGO-->
        <?php include 'php/logo.php'; ?>
        <!--LOGO-->

        <!--MENU-->
        <?php include 'php/menu.php'; ?>
        <!--MENU-->

        <div class="clear"></div>

        <div class="about">
            <h1>Hakkımda</h1>
            <div id="HTMLtoPDF" contenteditable="false">

                <h2>Kisisel Bilgiler</h2>
                <div class="col">
                    <div class="aboutLeft">
                        <h4>Ad Soyad :</h4>
                    </div>
                    <div class="aboutRight">
                        <p>Onur Kantar</p>
                    </div>
                </div>
                <div class="col">
                    <div class="aboutLeft">
                        <h4>Telefon :
                        </h4>
                    </div>
                    <div class="aboutRight">
                        <p>0541 608 83 68</p>
                    </div>
                </div>
                <div class="col">
                    <div class="aboutLeft">
                        <h4>Adres :</h4>
                    </div>
                    <div class="aboutRight">
                        <p>Sancaktepe/Istanbul</p>
                    </div>
                </div>
                <div class="col">
                    <div class="aboutLeft">
                        <h4>Mail :</h4>
                    </div>
                    <div class="aboutRight">
                        <p>onurkantr@gmail.com</p>
                    </div>
                </div>
                <h2>Hakkimda</h2>
                <div class="col">
                    <p>Bilgisayar egitimime Samandira Mesleki Ve Teknik Anadolu Lisesi'nde Bilisim Teknolojileri alaninda ogrenim gorerek basladim. Lise zorunlu stajimi Master Net Savunma ve Guvenlik Teknolojileri'nde yaptim. Bilgisayar egitimime su anda
                        Kocaeli Universitesi'nde Bilisim Sistemleri Muhendisligi bolumunu okuyarak devam ediyorum. Ogrenim hayatim boyunca C# diline merak salip uzerinde projeler yaptim. Ayrica Unity ile C# programlama dilini kullanarak telefon ve bilgisayar
                        oyunlari gelistirdim. Bu oyunlarimdan "Spin Hit" isimli oyunumu Google Play üzerinde yayinladim.</p>
                </div>
                <h2>Egitim</h2>
                <div class="col">
                    <div class="aboutLeft">
                        <h4>Universite :</h4>
                    </div>
                    <div class="aboutRight">
                        <p>Kocaeli Universitei - Bilisim Sistemleri Muhendisligi</p>
                    </div>
                </div>
                <div class="col">
                    <div class="aboutLeft">
                        <h4>Lise :</h4>
                    </div>
                    <div class="aboutRight">
                        <p>Samandira MTAL - Bilisim Teknolojileri</p>
                    </div>
                </div>

                <h2>Tecrube</h2>
                <div class="col">
                    <div class="aboutLeft">
                        <h4>Master Net </h4>
                    </div>
                    <div class="aboutRight">
                        <p>Yazilim Stajyeri</p>
                    </div>
                </div>
                <div class="col">
                    <div class="aboutLeft">
                        <h4>Almera Bilisim</h4>
                    </div>
                    <div class="aboutRight">
                        <p>Yazilim Stajyeri</p>
                    </div>
                </div>
                <h2>Ingilizce</h2>
                <div class="col">
                    <div class="aboutLeft">
                        <h4>Okuma :</h4>
                    </div>
                    <div class="aboutRight">
                        <p>Baslangic</p>
                    </div>
                </div>
                <div class="col">
                    <div class="aboutLeft">
                        <h4>Yazma :</h4>
                    </div>
                    <div class="aboutRight">
                        <p>Baslangic</p>
                    </div>
                </div>

                <div class="col">
                    <div class="aboutLeft">
                        <h4>Konusma :</h4>
                    </div>
                    <div class="aboutRight">
                        <p>Baslangic</p>
                    </div>
                </div>
            </div>
            <div class="buttons">
                <button class="aboutButton" onclick="HTMLtoPDF()">PDF İndir</button>
                <button class="aboutButton" id="editButton" onclick="Edit()">Düzenle</button>
            </div>
        </div>
        <script src="/about-edit.js"></script>

        <!--https://www.youtube.com/watch?v=_EqYMNdbrsc'dan alıntı-->
        <script src="js/jspdf.js"></script>
        <script src="js/jquery-2.1.3.js"></script>
        <script src="js/pdfFromHTML.js"></script>
        <!--https://www.youtube.com/watch?v=_EqYMNdbrsc'dan alıntı-->


        <div class="clear"></div>

        <!--FOOTER-->
        <?php include 'php/footer.php'; ?>
        <!--FOOTER-->

    </div>
    <!--BACK TO TOP-->
    <?php include 'php/backToTop.php'; ?>
    <!--BACK TO TOP-->
</body>



</html>