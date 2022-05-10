<?php

session_start([
    'cookie_lifetime' => 86400,
]);

set_include_path($_SERVER['DOCUMENT_ROOT']);

require "views/layouts/header.php";
require "views/layouts/navigation.php";


require "models/Post.php";
require "models/User.php";?>
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

$post = new Post();

$postsArr = $post->getPosts();

$users = new User();
$usersArr = $users->getUsers();

foreach ($postsArr as $item) { ?>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 bg-primary">
                <img src="<?php
                foreach ($usersArr as $value) {
                    if ($value['id'] == $item['user_id']) {
                        echo '../../img/' . $value['image'];
                    }
                }
                ?>" alt="avatar" class="img-responsive img-rounded" height ="50" width="50" style="float: left">
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

<?php }
