<?php require admin_view('static/header'); ?>

<div class="container mt-4">

    <div class="row justify-content-center">
        <div class="col-7 mb-3">
            <h3>E-Posta Detayları</h3>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-2">
            <h6>Ad Soyad : </h6>
        </div>
        <div class="col-5">
            <p><?= $row['contact_name'] . " " . $row['contact_surName'] ?></p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-2">
            <h6>Mail : </h6>
        </div>
        <div class="col-5">
            <p><?= $row['contact_mail'] ?></p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-2">
            <h6>Tarih : </h6>
        </div>
        <div class="col-5">
            <p><?= $row['contact_date'] ?></p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-2">
            <h6>Başlık : </h6>
        </div>
        <div class="col-5">
            <p><?= $row['title'] ?></p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-2">
            <h6>İçerik : </h6>
        </div>
        <div class="col-5">
            <p><?= $row['message'] ?></p>
        </div>
    </div>
</div>
<?php require admin_view('static/footer'); ?>