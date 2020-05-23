<?php require view('static/header') ?>

<div class="contact">
    <?php if ($err = error()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $err ?>
        </div>
    <?php endif ?>
    <?php if ($success = success()) : ?>
        <div class="alert alert-success" role="alert">
            <?= $success ?>
        </div>
    <?php endif ?>
    <h2>İletişim</h2>
    <form action="" method="post">
        <input type="text" name="name" value="<?= session('name') ?>" class="input-text" placeholder="Ad">
        <input type="text" name="surName" value="<?= session('surName') ?>" class="input-text" placeholder="Soyad">
        <!--    
        <input type="date" name="date" value="" class="input-text">
        <input type="tel" name="phone" value="" class="input-text" placeholder="Telefon Numarası">
-->
        <input type="email" name="mail" value="<?= session('mail') ?>" class="input-text" placeholder="E-Posta Adresi">
        <input type="text" name="title" class="input-text" placeholder="Konu Başlığı">
        <textarea name="message" class="input-text" placeholder="Mesaj" id="" cols="20" rows="5"></textarea>
        <input type="hidden" name="submit" value="1">
        <button type="submit" class="send-button">Gönder</button>
    </form>

</div>

<?php require view('static/footer') ?>