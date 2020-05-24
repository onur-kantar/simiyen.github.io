<?php require admin_view('static/header') ?>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Ad</label>
            <input name="name" value="<?= $query['name'] ?>" type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Soyad</label>
            <input name="surName" value="<?= $query['surName'] ?>" type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Telefon</label>
            <input name="phone" value="<?= $query['phone'] ?>" type="number" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Adres</label>
            <input name="address" value="<?= $query['address'] ?>" type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">E-Mail Adresi</label>
            <input name="mail" value="<?= $query['mail'] ?>" type="email" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Hakkımda</label>
            <textarea name="about" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $query['about'] ?></textarea>
        </div>
        <input type="hidden" name="submit" value="1">
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
</div>
<?php require admin_view('static/footer') ?>