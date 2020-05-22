<?php require_once admin_view('/static/header') ?>
<form action="" method="post">
    <?php if ($succ = success()) : ?>
        <div class="alert alert-success" role="alert">
            <?= $succ ?>
        </div>
    <?php endif ?>
    <?php if ($err = error()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $err ?>
        </div>
    <?php endif ?>
    <div class="form-group">
        <label for="exampleInputTitle1">Başlık</label>
        <input required name="title" type="text" class="form-control" id="exampleInputTitle1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputURL1">URL</label>
        <input required name="url" type="text" class="form-control" id="exampleInputURL1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">İçerik</label>
        <textarea required name="content" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlShortTextarea1">Özet</label>
        <textarea required name="short" class="form-control" id="exampleFormControlShortTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="inputState">Kategori</label>
        <select id="inputState" class="form-control" name="category_id">
            <?php foreach($query as $row): ?>
            <option value="<?=$row['id']?>"><?=$row['name']?></option>
            <?php endforeach; ?>
        </select>
    </div> <input type="hidden" name="user_id" value="<?= session('id') ?>">
    <input type="hidden" name="submit" value="1">
    <button type="submit" class="btn btn-primary">Paylaş</button>
</form>
<?php require_once admin_view('/static/footer') ?>