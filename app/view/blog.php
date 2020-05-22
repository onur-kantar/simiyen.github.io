<?php require view('static/header'); ?>

<form class="form-inline mt-3 mb-3 float-right" method="post" action="">
    <div class="form-group mx-sm-3 mb-2">
        <input type="password" class="form-control" id="inputPassword2" placeholder="Ara">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Ara</button>
</form>

<div class="clear"></div>
<?php foreach ($query as $row) : ?>
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title"><?php echo $row['title']; ?></h2>
            <p class="card-text"><?php echo $row['short']; ?></p>
            <a href="<?php echo site_url(route(0) . '/' . $row['url']); ?>" class="btn btn-primary">Devamını Oku →</a>
        </div>
        <div class="card-footer text-muted">
            Tarih : <?php echo $row['date']; ?> | Yazar : <?= $row['name'] ?> <?= $row['surName'] ?>
        </div>
    </div>
<?php endforeach; ?>
<?php if ($totalRecord > $pageLimit) : ?>
    <ul class="pagination pagination-sm">
        <?= $db->showPagination(site_url(route(0) . '?name=' . $name . '&' . $pageParam . '=[page]')) ?>
    </ul>
<?php endif; ?>

<?php require view('static/footer'); ?>