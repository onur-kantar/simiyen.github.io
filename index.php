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


        <?php

        try {

            $db_ad = 'simiyen';
            $db_kullanici = 'root';
            $db_sifre = '';
            $db = new PDO('mysql:host=localhost;dbname=' . $db_ad, $db_kullanici, $db_sifre);

            foreach ($db->query('SELECT * from users') as $satir) {
                print_r($satir);
            }
            $db = null;
        } catch (PDOException $e) {
            print "Bağantı Hatası!: " . $e->getMessage() . "<br/>";
            die();
        }

        ?>
        <!--LOGO-->
        <?php include 'php/logo.php'; ?>
        <!--LOGO-->

        <!--MENU-->
        <?php include 'php/menu.php'; ?>
        <!--MENU-->

        <!--MENU-->
        <?php include 'php/slider.php'; ?>
        <!--MENU-->

        <div class="clear"></div>

        <!--CONTENTS-->
        <?php include 'php/contents.php'; ?>
        <!--CONTENTS-->

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