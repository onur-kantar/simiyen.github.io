<?php require_once admin_view('/static/header') ?>
<div class="container">
    <div class="col-7 mb-3">
        <h3>Gelen E-Postalar</h3>
    </div>

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
                    <td><a href="<?= admin_url('contact_details?id=') . $row['contact_id'] ?>" type="button" class="btn btn-info">Görüntüle</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php require_once admin_view('/static/footer') ?>