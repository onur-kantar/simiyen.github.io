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

        

        require_once 'php/logo.php';
        require_once 'php/menu.php';
        if (!isset($_GET['page'])) {
            $_GET['page'] = 'index';
        }
        switch ($_GET['page']) {
            case 'index':
                require_once 'php/slider.php';
                require_once 'php/contents.php';
                break;
            case 'video1':
                require_once 'php/video1.php';
                break;
            case 'video2':
                require_once 'php/video2.php';
                break;
            case 'video3':
                require_once 'php/video3.php';
                break;
            case 'studies1':
                require_once 'php/studies1.php';
                break;
            case 'studies2':
                require_once 'php/studies2.php';
                break;
            case 'studies3':
                require_once 'php/studies3.php';
                break;
            case 'about':
                require_once 'php/about.php';
                break;
            case 'contact':
                require_once 'php/contact.php';
                break;
        }
        require_once 'php/footer.php';
        ?>
    </div>
    <?php include 'php/backToTop.php'; ?>
</body>

</html>