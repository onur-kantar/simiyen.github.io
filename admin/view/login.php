<?php require admin_view('/static/header') ?>
<div class="container mt-5 p-5 col col-md-5">
    <?php if (isset($error)) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $error ?>
        </div>
    <?php endif; ?>
    <h3>Admin Giriş</h3>
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1"> E-Posta Adresi</label>
            <input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Şifre</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button name="submit" value="1" type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-danger" href="<?=site_url();?>">Siteye Dön</a>
        
    </form>
</div>
<?php require admin_view('/static/footer') ?>