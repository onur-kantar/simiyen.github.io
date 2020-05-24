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
        <h3>Şifre Değiştir</h3>
        <div class="form-group">
            <label for="InputName">Eski Şifre</label>
            <input name="password" type="password" class="form-control" id="InputPassword1">
        </div>
        <div class="form-group">
            <label for="InputSurName">Yeni Şifre</label>
            <input name="newPassword" type="password" class="form-control" id="InputPassword2" >
        </div>
        <div class="form-group">
            <label for="InputName">Tekrar Yeni Şifre</label>
            <input name="reNewPassword" type="password" class="form-control" id="InputPassword3">
        </div>
        <button name="submit" value="1" type="submit" class="btn btn-primary">Kaydet</button>
        </ul>
    </form>
</div>


<?php require_once admin_view('/static/footer') ?>