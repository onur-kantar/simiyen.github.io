<?php require_once view('/static/header'); ?>



<div class="container w-50 p-3">
    <h3>Profil Düzenle</h3>

    <form action="" method="post">
        <div class="form-group">
            <label for="InputName">Ad</label>
            <input name="name" type="text" class="form-control" id="InputName" value="<?= post('name') ? post('name') : $row['name'] ?>">
        </div>
        <div class="form-group">
            <label for="InputSurName">Soyad</label>
            <input name="surName" type="text" class="form-control" id="InputSurName" value="<?= post('surName') ? post('surName') : $row['surName'] ?>">
        </div>
        <div class="form-group">
            <label for="InputEmail">E-Posta</label>
            <input name="mail" type="email" class="form-control" id="InputEmail" value="<?= post('mail') ? post('mail') : $row['mail'] ?>">
        </div>
        <button name="submit" value="1" type="submit" class="btn btn-primary">Kaydet</button>
        </ul>
    </form>
</div>


<?php require_once view('/static/footer') ?>