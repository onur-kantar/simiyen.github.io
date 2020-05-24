<?php require admin_view('static/header') ?>


<!--<div class="clear" style="height: 10px;"></div>-->

<div class="container">
    <h3>Üye Düzenle</h3>
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
            <label for="InputSurName">Kullanıcı Adı</label>
            <input name="userName" type="text" class="form-control" id="InputSurName" value="<?= post('userName') ? post('userName') : $row['userName'] ?>">
        </div>
        <div class="form-group">
            <label for="InputEmail">E-Posta</label>
            <input name="mail" type="email" class="form-control" id="InputEmail" value="<?= post('mail') ? post('mail') : $row['mail'] ?>">
        </div>
        <label>Rütbe</label>
        <div class="form-group">
            <select class="custom-select" name="role_id">
                <?php foreach ($roles as $role) : ?>
                    <option <?= (post('role_id') ? post('role_id') : $row['role_id']) == $role['role_id'] ? ' selected' : null ?> value="<?= $role['role_id'] ?>"><?= $role['role_name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button name="submit" value="1" type="submit" class="btn btn-primary">Kaydet</button>
        <a class="btn btn-danger" href="<?= admin_url('users') ?>">Geri Dön</a>
        </ul>
    </form>
</div>

<?php require admin_view('static/footer') ?>