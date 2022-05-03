<?php

set_include_path ($_SERVER['DOCUMENT_ROOT']);

require "views/layouts/header.php";
require "views/layouts/navigation.php";
require "views/layouts/layout.php";
require "views/layouts/footer.php";

require "models/Post.php";
?>
<br>
<?php

foreach ($postsArr as $item) { ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 bg-primary">
                <img src="../../img/No_image_available.svg.png" alt="No foto" class="img-responsive img-rounded" height ="50" width="50" style="float: left">
                <?php
                foreach ($usersArr as $value) {
                    if ($value['id'] == $item['user_id']) {
                        echo "author: " . $value['firstname'] . " " . $value['lastname'];
                    }
                }
                ?>
            </div>

            <div class="col-md-10 col-md-offset-1 bg-info text-justify">
                <?php echo $item['post_text']; ?>
            </div>
            <div class="col-md-10 col-md-offset-1 bg-warning" >
                <?php echo $item['date']; ?>
            </div>
        </div>
    </div>
    </div>
    <br>
<?php  } ?>
