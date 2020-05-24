<?php require view('static/header'); ?>

<div class="row justify-content-center mt-4 mb-4">
    <div class="col-7">
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
        <form action="" method="post">
            <h3>Şifre Sıfırla</h3>
            <div class="form-group">
                <label for="exampleInputEmail">Kullanıcı Adı</label>
                <input name="userName" type="text" class="form-control" id="exampleInputEmail">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">E-Posta Adresi</label>
                <input name="mail" type="mail" class="form-control" id="exampleInputMail">
            </div>
            <input type="hidden" name="forget" value="1">
            <button type="submit" class="btn btn-primary">Sıfırla</button>
        </form>
    </div>
</div>

<?php require view('static/footer'); ?>