<?php require_once admin_view('/static/header') ?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Ad</th>
            <th scope="col">Soyad</th>
            <th scope="col">Mail</th>
            <th scope="col">Title</th>
            <th scope="col">Tarih</th>
            <th scope="col">Detaylar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($query as $row) : ?>
            <tr>
                <th scope="row"><?= $row['contact_id'] ?></th>
                <td><?= $row['contact_name'] ?></td>
                <td><?= $row['contact_surName'] ?></td>
                <td><?= $row['contact_mail'] ?></td>
                <td><?= $row['title'] ?></td>
                <td><?= $row['contact_date'] ?></td>
                <td><button type="button" class="btn btn-info">Görüntüle</button></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table><?php require_once admin_view('/static/footer') ?>