<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Onur Kantar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= public_url('style.css') ?>">
    <script src="https://kit.fontawesome.com/b05edded2b.js" crossorigin="anonymous"></script>
    <script src="./scroll.js"></script>
    <script src="/menu.js"></script>
</head>

<body id="body">
    <div id="container">

        <div class="header">
            <a href="index.php">
                <img src="./img/logo.png" alt="logo">
            </a>
            <div class="header-right">
                <a href="<?= site_url('login_register') ?>" type="button" class="btn btn-dark">Kaydol / Giriş Yap</a>

            </div>
        </div>

        <!--www.w3schools.com'dan alıntı-->
        <div class="topnav" id="myTopnav">

            <a href="index.php" class="active">Anasayfa</a>

            <div class="dropdown">

                <button class="dropbtn">Videolar

                </button>

                <div class="dropdown-content">
                    <a href="index.php?page=video1">Elvis Presley</a>

                    <a href="index.php?page=video2">Charlie Chaplin</a>

                    <a href="index.php?page=video3">Mr. Bean</a>
                </div>

            </div>

            <div class="dropdown">

                <button class="dropbtn">Çalışmalar

                </button>

                <div class="dropdown-content">


                    <a target="_blank" href="index.php?page=studies1">Chernozem</a>

                    <a target="_blank" href="index.php?page=studies2">Mobilya Otomasyonu</a>

                    <a target="_blank" href="index.php?page=studies3">Course Management System</a>

                </div>

            </div>

            <a href="index.php?page=about">Hakkımda</a>

            <a href="index.php?page=contact">İletişim</a>

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>

        </div>
        <!--www.w3schools.com'dan alıntı-->