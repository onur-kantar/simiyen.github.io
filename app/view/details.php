<?php require view('static/header') ?>
<div class="container">
    <!-- Title -->
    <h1 class="mt-4">
        <?php echo $details['title']; ?>
    </h1>

    <!-- Author -->
    <p class="lead">
        <p> Yazar : <?= $details['name'] ?> <?= $details['surName'] ?> </p>
    </p>
    <hr>
    <p>Tarih : <?php echo $details['date']; ?></p>
    <hr>
    <p><?php echo $details['content']; ?></p>

</div>

<?php require view('static/footer') ?>