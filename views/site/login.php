<?php

session_start([
    'cookie_lifetime' => 86400,
]);

set_include_path($_SERVER['DOCUMENT_ROOT']);

require "views/layouts/header.php";
require "views/layouts/navigation.php";
require "views/layouts/footer.php";?>
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <h2 style="text-align: center"> Logging user</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form role="form" action="#" class="form-horizontal" method="post">
                <div class="form-grope">
                    <label for="email" class="control-label col-md-2">Email</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" name="email" id="email" placeholder="andrey18051@gmail.com" required><br>
                    </div>
                </div>
                <div class="form-grope">
                    <label for="password" class="control-label col-md-2" >Password</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required><br>
                    </div>
                </div>
                <div class="form-grope">
                    <div class="col-md-10 col-md-offset-2">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button  type="reset"  class="btn btn-danger" >
                            Reset
                        </button>
                        <a class="btn btn-primary" href="register.php">Reg now</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php

if (isset($_POST['email'])) {
    require "models/User.php";
    $user = new User();
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];
    if ($user->userVerify() == true) {
        $_SESSION['user_id'] =  $user->getUserName();
        $_SESSION['email'] = $_POST['email'];?>

        <div id="MyModalWindow" class="collapse in" style="margin-top: 10px">
        <div class="container">
            <div class="row">
                <a href="../../views/site/posts.php" class="col-md-12 btn btn-success text-right" data-toggle="collapse" data-target="#MyModalWindow">Logging successful</a></p>
            </div>
        </div>
        </div>
        <?php
    } else {
        $_SESSION['user_id'] =  null;
        ?>
        <div id="MyModalWindow" class="collapse in" style="margin-top: 10px">
            <div class="container">
                <div class="row">
                    <button class="col-md-12 btn btn-danger text-right" data-toggle="collapse" data-target="#MyModalWindow">Logging error</button></p>
                </div>
            </div>
        </div>
         <?php
    }
}


