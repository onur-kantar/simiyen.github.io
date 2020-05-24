<?php require_once admin_view('/static/header'); ?>

<div class="container">
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
    <form action="" method="post" class="mb-3">
        <h3>Admin</h3>
        <div class="form-group">
            <label for="InputName">Ad</label>
            <input name="name" type="text" class="form-control" id="InputName" value="<?= post('name') ? post('name') : $row['name'] ?>">
        </div>
        <div class="form-group">
            <label for="InputSurName">Soyad</label>
            <input name="surName" type="text" class="form-control" id="InputSurName" value="<?= post('surName') ? post('surName') : $row['surName'] ?>">
        </div>
        <div class="form-group">
            <label for="InputName">Kullanıcı Adı</label>
            <input name="userName" type="text" class="form-control" id="InputName" value="<?= post('userName') ? post('userName') : $row['userName'] ?>">
        </div>
        <div class="form-group">
            <label for="InputEmail">E-Posta</label>
            <input name="mail" type="email" class="form-control" id="InputEmail" value="<?= post('mail') ? post('mail') : $row['mail'] ?>">
        </div>
        <button name="submit" value="1" type="submit" class="btn btn-primary">Kaydet</button>
        </ul>
    </form>
    <a href="<?= admin_url('change_password') ?>">Şifre Değiştir</a>
</div>


<?php require_once admin_view('/static/footer') ?>