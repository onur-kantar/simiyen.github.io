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

        <div class="contact">
            <h2>İletişim</h2>
            <form action="https://formspree.io/onurkantr@gmail.com" method="POST">
                <input type="text" name="name" class="input-text" placeholder="Ad">
                <input type="text" name="surname" class="input-text" placeholder="Soyad">
                <input type="date" name="bday" class="input-text">
                <input type="tel" name="phone" class="input-text" placeholder="Telefon Numarası">
                <input type="email" name="email" class="input-text" placeholder="E-Posta Adresi">
                <textarea name="message" class="input-text" placeholder="Mesaj" id="" cols="20" rows="5"></textarea>
                <button type="submit" class="send-button">Gönder</button>
            </form>

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