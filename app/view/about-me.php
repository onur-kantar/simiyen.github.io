<?php require view('/static/header') ?>
<div class="clear"></div>

<div class="clear"></div>

<div class="m-5 border p-3">
    <h1>Hakkımda</h1>
    <div id="HTMLtoPDF">

        <h2>Kisisel Bilgiler</h2>
        <div class="col">
            <div class="aboutLeft">
                <h4>Ad Soyad :</h4>
            </div>
            <div class="aboutRight">
                <p><?=$query['name']." ".$query['surName']?></p>
            </div>
        </div>
        <div class="col">
            <div class="aboutLeft">
                <h4>Telefon :
                </h4>
            </div>
            <div class="aboutRight">
                <p><?=$query['phone']?></p>
            </div>
        </div>
        <div class="col">
            <div class="aboutLeft">
                <h4>Adres :</h4>
            </div>
            <div class="aboutRight">
                <p><?=$query['address']?></p>
            </div>
        </div>
        <div class="col">
            <div class="aboutLeft">
                <h4>Mail :</h4>
            </div>
            <div class="aboutRight">
                <p><?=$query['mail']?></p>
            </div>
        </div>
        <h2>Hakkimda</h2>
        <div class="col">
            <p><?=$query['about']?></p>
        </div>
    </div>
    <div class="buttons">
        <button class="aboutButton" onclick="HTMLtoPDF()">PDF İndir</button>
    </div>
</div>

<!--https://www.youtube.com/watch?v=_EqYMNdbrsc'dan alıntı-->
<script src="js/jspdf.js"></script>
<script src="js/jquery-2.1.3.js"></script>
<script src="js/pdfFromHTML.js"></script>
<!--https://www.youtube.com/watch?v=_EqYMNdbrsc'dan alıntı-->


<div class="clear"></div>
<?php require view('/static/footer') ?>