<?php require view('static/header'); ?>
<div class="container mt-3">

    <?php if ($err = error()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $err ?>
        </div>
    <?php endif ?>

    <div class="row">

        <div class="col-12 col-sm-6 mt-2 p-4 border-right">
            <form action="" method="post">
                <h3>Kaydol</h3>
                <div class="form-group">
                    <label for="exampleInputName">Ad</label>
                    <input name="name" type="text" class="form-control" id="exampleInputName">
                </div>
                <div class="form-group">
                    <label for="exampleInputSurName">Soyad</label>
                    <input name="surName" type="text" class="form-control" id="exampleInputSurName">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Email</label>
                    <input name="mail" type="text" class="form-control" id="exampleInputEmail">
                </div>
                <div class="form-group">
                    <label for="exampleInputSurName">Kullanıcı Adı</label>
                    <input name="userName" type="text" class="form-control" id="exampleInputSurName">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Şifre</label>
                    <input name="password1" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword2">Tekrar Şifre</label>
                    <input name="password2" type="password" class="form-control" id="exampleInputPassword2">
                </div>
                <input type="hidden" name="register_submit" value="1">
                <button type="submit" class="btn btn-primary">Kaydol</button>
            </form>
        </div>

        <div class="col-12 col-sm-6 mt-2 p-4">
            <form action="" method="post">
                <h3>Giriş Yap</h3>
                <div class="form-group">
                    <label for="exampleInputEmail">Kullanıcı Adı</label>
                    <input name="userName" value="<?= isset($_COOKIE["member_userName"]) ? $_COOKIE["member_userName"] : "" ?>" type="text" class="form-control" id="exampleInputEmail">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword">Şifre</label>
                    <input name="password" value="<?= isset($_COOKIE["member_password"]) ? $_COOKIE["member_password"] : "" ?>" type="password" class="form-control" id="exampleInputPassword">
                </div>
                <div class="form-group form-check">
                    <input name="remember" <?php if (isset($_COOKIE["member_userName"])) { ?> checked <?php } ?> type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Beni Hatırla</label>
                </div>
                <input type="hidden" name="login_submit" value="1">
                <button type="submit" class="btn btn-primary">Giriş Yap</button>
            </form>
            <a href="<?= site_url('forget_password') ?>">Şifremi Unuttum</a>
        </div>
    </div>
</div>
<?php require view('static/footer'); ?>