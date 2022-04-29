<?php
require_once "layouts/header.php";
require_once "layouts/navigation.php";
require_once "layouts/layout.php";
require_once "layouts/footer.php";
require_once "posts_array.php";
?>
    <br>
    <?php

    foreach ($postsArr as $item) { ?>
        <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 bg-primary">
                <img src="img/No_image_available.svg.png" alt="No foto" class="img-responsive img-rounded" height ="50" width="50" style="float: left">
                <?php echo $item['author']; ?>
            </div>

            <div class="col-md-10 col-md-offset-1 bg-info text-justify">
                <?php echo $item['post']; ?>
            </div>
            <div class="col-md-10 col-md-offset-1 bg-warning" >
                <?php echo $item['date']; ?>
            </div>
        </div>
        </div>
    </div>
    <br>
    <?php  } ?>
