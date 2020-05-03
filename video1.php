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

        <div class="video">
            <h2>Elvis Presley</h2>
            <video width="50%" height="" controls>
                <source src="video/video-1.mp4" type="video/mp4">
            </video>
        </div>

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