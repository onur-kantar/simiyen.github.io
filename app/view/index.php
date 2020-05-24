<?php require view('static/header'); ?>

<!--www.w3schools.com'dan alıntı-->
<div class="slideshow-container">

    <div class="mySlides myFade">

        <img src="<?=img_url('img1.jpg')?>" style="width:100%">

    </div>

    <div class="mySlides myFade">

        <img src="<?=img_url('img2.jpg')?>" style="width:100%">

    </div>

    <div class="mySlides myFade">

        <img src="<?=img_url('img3.jpg')?>" style="width:100%">

    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>

    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>


<div style="text-align:center">

    <span class="dot" onclick="currentSlide(1)"></span>

    <span class="dot" onclick="currentSlide(2)"></span>

    <span class="dot" onclick="currentSlide(3)"></span>

</div>
<div class="clear"></div>

<script src="<?=js_url('slider')?>"></script>
<!--www.w3schools.com'dan alıntı-->


<div class="d-sm-flex justify-content-between">
    <div class="col-12 col-sm-6 ">
        <div class="title">
            <h1> <a href="<?= site_url('blog') ?>/?id=2"> Haberler </a></h1>
        </div>
        <?php foreach ($news as $row) : ?>
            <div class="mt-2 mb-5">
                <!--<div class="img">
                <img src="./img/cybertruck.jpg" alt="cybertruck">
                </div>-->
                <div class="container">
                    <h4 class="text-center">
                        <a target="_blank" href="<?= site_url('blog') . "/" . $row['url'] ?>"><?= $row['title'] ?></a>
                    </h4>
                    <p><?= $row['short'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="col-12 col-sm-6">
        <div class="title">
            <h1> <a href="<?= site_url('blog') ?>/?id=1"> Duyurular </a></h1>
        </div>
        <?php foreach ($notice as $row) : ?>
            <div class="mt-2 mb-5">
                <!--<div class="img">
                <img src="./img/cybertruck.jpg" alt="cybertruck">
                </div>-->
                <div class="container">
                    <h4 class="text-center">
                        <a target="_blank" href="<?= site_url('blog') . "/" . $row['url'] ?>"><?= $row['title'] ?></a>
                    </h4>
                    <p><?= $row['short'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="clear"></div>

<?php require view('static/footer'); ?>