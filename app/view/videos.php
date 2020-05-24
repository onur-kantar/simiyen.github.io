<?php require view('static/header');?>
<?php if ($id == 1) : ?>
    <div class="video">
        <h2>Elvis Presley</h2>
        <video width="50%" height="" controls>
            <source src="video/video-1.mp4" type="video/mp4">
        </video>
    </div>

<?php elseif ($id == 2) : ?>
    <div class="video">
        <h2>Charlie Chaplin</h2>
        <video width="50%" height="" controls>
            <source src="video/video-2.mp4" type="video/mp4">
        </video>
    </div>

<?php elseif ($id == 3) : ?>
    <div class="video">
        <h2>Mr. Bean</h2>
        <video width="50%" height="" controls>
            <source src="video/video-3.mp4" type="video/mp4">
        </video>
    </div>
<?php endif; ?>

<?php require view('static/footer') ?>