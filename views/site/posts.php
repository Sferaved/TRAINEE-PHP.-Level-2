<?php

session_start([
    'cookie_lifetime' => 86400,
]);

set_include_path($_SERVER['DOCUMENT_ROOT']);

require "views/layouts/header.php";
require "views/layouts/navigation.php";

require "models/Post.php";
require "models/User.php";

require "controllers/PostsController.php"
?>
  <script>
        $(document) . ready(function(){
            $('button') .on('click', function() {

                let user_idValue = '<?php echo $_SESSION['userId']; ?>';
                let post_textValue = $('textarea').val();
                let dateValue = new Date();

                let dataYear = dateValue.getFullYear();
                let dataMonth = dateValue.getMonth();
                let dataDate = dateValue.getDate();

                let data = dataYear + '-' + dataMonth + '-' + dataDate;

                $.ajax ({
                    method: "POST",
                    url: "post_new.php",
                    data: {user_id: user_idValue , post_text: post_textValue, date: data }
                })
                  .done(function () {
                      $('textarea').val('');
                      parent.location.reload();
                  });


            });
        });
    </script>
<?php
if ($_SESSION['userId'] !== null) {?>
    <div class="jumbotron">
        <div class="container-fluid" >
            <div class="row">
                <textarea class="col-md-8 col-md-offset-2" name="postText" id="postTextId" cols="300" rows="5"></textarea>
                <button id="newPost" class="btn btn-info col-md-8 col-md-offset-2">Creat new post</button>
            </div>
        </div>
    </div>
    <?php
}

$connect = new PostsController();
$posts = $connect->posts();
