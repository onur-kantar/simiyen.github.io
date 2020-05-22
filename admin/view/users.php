<?php require_once admin_view('/static/header') ?>
<table class="table">
  <div class="d-flex bd-highlight">
    <div class="p-2 w-100 bd-highlight">
      <h3>Üyeler</h3>
    </div>
    <div class="p-2 flex-shrink-1 bd-highlight">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Ara" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
          <a class="btn btn-outline-secondary" type="button" id="button-addon2">Ara</a>
        </div>
      </div>
    </div>
  </div>

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ad</th>
      <th scope="col">Soyad</th>
      <th scope="col">Mail</th>
      <th scope="col">Kayıt Tarihi</th>
      <th scope="col">Rol</th>
      <th scope="col">Düzenle / Sil</th>

    </tr>
  </thead>
  <tbody>
    <?php foreach ($query as $row) : ?>
      <tr>
        <th scope="row"><?= $row['id'] ?></th>
        <td><?= $row['name'] ?></td>
        <td><?= $row['surName'] ?></td>
        <td><?= $row['mail'] ?></td>
        <td><?= $row['date'] ?></td>
        <td><?= $row['role_name'] ?></td>
        <td>
          <a href="<?= admin_url('edit-user?id=' . $row['id']) ?>" class="btn btn-success">Düzenle</a>
          <a onclick="return confirm('Silmek İstediğinize Emin Misiniz?')" href="<?= admin_url('delete?table=users&column=id&id=' . $row['id']) ?>" class="btn btn-danger">Sil</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php if ($totalRecord > $pageLimit) : ?>
  <ul class="pagination pagination-sm">
    <?= $db->showPagination(admin_url(route(1) . '?' . $pageParam . '=[page]')) ?>
  </ul>
<?php endif; ?>
<?php require_once admin_view('/static/footer') ?>