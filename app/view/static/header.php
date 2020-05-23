<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Onur Kantar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= public_url('style.css') ?>">
    <script src="https://kit.fontawesome.com/b05edded2b.js" crossorigin="anonymous"></script>
    <script src="./scroll.js"></script>
    <script src="/menu.js"></script>
</head>

<body id="body">
    <div id="container">

        <div class="header">
            <a href="<?= site_url() ?>">
                <img src="<?=img_url('logo.png')?>" alt="logo">
            </a>
            <div class="header-right">
                <?php if (session('id')) : ?>


                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= session('name') . " " . session('surName') ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php if (session('role') == 1) : ?>
                                <a class="dropdown-item" href="<?= admin_url('index') ?>">Admin Panel</a>
                            <?php else : ?>
                                <a class="dropdown-item" href="<?= site_url('profile') ?>">Profil</a>
                            <?php endif; ?>
                            <a class="dropdown-item" href="<?= site_url('exit') ?>">Çıkış Yap</a>
                        </div>
                    </div>

                <?php else : ?>
                    <a href="<?= site_url('login_register') ?>" type="button" class="btn btn-dark">Kaydol / Giriş Yap</a>
                <?php endif; ?>
            </div>
        </div>

        <!--www.w3schools.com'dan alıntı-->
        <div class="topnav" id="myTopnav">

            <a href="index.php" class="active">Anasayfa</a>

            <div class="myDropdown">

                <button class="dropbtn">Videolar

                </button>

                <div class="myDropdown-content">
                    <a href="index.php?page=video1">Elvis Presley</a>

                    <a href="index.php?page=video2">Charlie Chaplin</a>

                    <a href="index.php?page=video3">Mr. Bean</a>
                </div>

            </div>

            <div class="myDropdown">

                <button class="dropbtn">Çalışmalar

                </button>

                <div class="myDropdown-content">


                    <a target="_blank" href="index.php?page=studies1">Chernozem</a>

                    <a target="_blank" href="index.php?page=studies2">Mobilya Otomasyonu</a>

                    <a target="_blank" href="index.php?page=studies3">Course Management System</a>

                </div>

            </div>

            <a href="<?= site_url('about-me') ?>">Hakkımda</a>

            <a href="<?= site_url('contact') ?>">İletişim</a>

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>

        </div>
        <!--www.w3schools.com'dan alıntı-->