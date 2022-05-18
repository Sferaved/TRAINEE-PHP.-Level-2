<?php

class PostsController
{
    public function posts()
    {

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
    }
}
