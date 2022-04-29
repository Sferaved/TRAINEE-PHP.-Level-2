<?php
require_once "layouts/header.php";
require_once "layouts/navigation.php";
require_once "layouts/layout.php";
require_once "layouts/footer.php"
?>
    <br>
    <?php
    for ($i = 1; $i <= 8; $i++) { ?>
        <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 bg-primary">
                <img src="img/No_image_available.svg.png" alt="No foto" class="img-responsive img-rounded" height ="50" width="50" style="float: left">
                Andrii Korzhov
            </div>

            <div class="col-md-10 col-md-offset-1 bg-info">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Quisque suscipit scelerisque odio, vel accumsan magna ultricies mollis.
                Nunc in maximus purus, pretium vulputate ligula. Donec eleifend dolor ut fringilla lacinia.
                Donec ut libero eros. Praesent vitae elementum nisl. Praesent semper euismod dapibus.
            </div>
            <div class="col-md-10 col-md-offset-1 bg-warning" >
                12-05-2022
            </div>
        </div>
        </div>
    </div>
    <br>
    <?php  } ?>
