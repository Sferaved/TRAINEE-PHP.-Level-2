<?php

session_start([
    'cookie_lifetime' => 86400,
]);

set_include_path($_SERVER['DOCUMENT_ROOT']);

require "views/layouts/header.php";
require "views/layouts/navigation.php";
require "views/layouts/footer.php";

require "models/User.php";

$user = new User();
$user->email = $_SESSION['email'];
$usersArr = $user->getUserId();?>

   <div class="jumbotron">
        <div class="container">
            <div class="row">
                <h2 style="text-align: center"> Update profile</h2>
            </div>
        </div>
   </div>
  <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <img src="<?php echo '../../img/' . $usersArr['image'] ?>" alt="Avatar" class="img-responsive img-rounded">
            </div>
            <div class="col-md-7 col-md-offset-1">
                <form role="form" action="#" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-grope">
                    <label for="firstName" class="control-label col-md-2" >First name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="firstName" id="firstName" value="<?php echo $usersArr['firstname'] ?>" required><br>
                    </div>
                </div>
                <div class="form-grope">
                    <label for="lastName" class="control-label col-md-2" >Last Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="lastName" id="lastName" value="<?php echo $usersArr['lastname'] ?>" required><br>
                    </div>
                </div>
                <div class="form-grope">
                    <label for="email" class="control-label col-md-2"><i class="glyphicon glyphicon-envelope"></i></label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $usersArr['email'] ?>" disabled><br>
                    </div>
                </div>
                <div class="form-grope">
                    <label for="phone" class="control-label col-md-2"><i class="glyphicon glyphicon-earphone"></i></label>
                    <div class="col-md-10">
                        <input type="tel"   class="form-control" name="phone" id="phone" value="<?php echo $usersArr['phone'] ?>" required><br>
                    </div>
                </div>
                <div class="form-grope">
                    <label for="password" class="control-label col-md-2" >Password</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="password" id="password" value="<?php echo $usersArr['password'] ?>" required><br>
                    </div>
                </div>
                <div class="form-grope">
                    <label for="image" class="control-label col-md-2" >Avatar image</label>
                    <div class="col-md-10">
                        <input type="file" class="form-control" name="uploadedFile" id="image"><br>
                    </div>
                </div>
                <div class="form-grope">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <button  type="submit"  class="btn btn-info" >
                            Update
                        </button>
                        <button  type="reset"  class="btn btn-danger" >
                            Reset
                        </button>
                   </div>
                </div>

            </form>
            </div>
        </div>
    </div>
<?php

if (isset($_POST['firstName'])) {
    $users = new User();

    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    $newFileName = $_SESSION['email'] . '.' . $fileExtension;
    $uploadFileDir = $_SERVER['DOCUMENT_ROOT'] . '/img/';
    $dest_path = $uploadFileDir . $newFileName;
    move_uploaded_file($fileTmpPath, $dest_path);

    $users->firstname = $_POST['firstName'];
    $users->lastname = $_POST['lastName'];
    $users->email = $usersArr['email'];
    $users->phone = $_POST['phone'];
    $users->password = $_POST['password'];
    $users->image = $newFileName;

    $users->updateUser();?>

    <div id="MyModalWindow" class="collapse in" style="margin-top: 10px">
        <div class="container">
            <div class="row">
                <a href="../../views/site/posts.php" class="col-md-12 btn btn-success text-right" data-toggle="collapse" data-target="#MyModalWindow">Update is successful</a></p>
            </div>
        </div>
   </div>
    <?php
}
