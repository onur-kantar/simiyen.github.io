<?php require_once admin_view('/static/header') ?>
<table class="table">
  <h3>Üyeler</h3>
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
          <a onclick="return confirm('Silmek İstediğinize Emin Misiniz?')"
          href="<?= admin_url('delete?table=users&column=id&id=' . $row['id']) ?>" class="btn btn-danger">Sil</a>
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