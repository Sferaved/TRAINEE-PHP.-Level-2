<?php

class LoginController
{
    public function login()
    {
        require 'models/User.php';
        $user = new User();
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        if ($user->userVerify() == true) {
            $_SESSION['userName'] =  $user->getUserName();
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['userId'] =  $user->getUserId();?>
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

    public function registration()
    {
        $users = new User();
        if ($users->newUserValidate($_POST['email']) == true) {
            if ($_FILES['uploadedFile']['size'] !== 0) {
                    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
                    $fileName = $_FILES['uploadedFile']['name'];
                    $fileSize = $_FILES['uploadedFile']['size'];
                    $fileType = $_FILES['uploadedFile']['type'];
                    $fileNameCmps = explode(".", $fileName);
                    $fileExtension = strtolower(end($fileNameCmps));

                    $newFileName = $_POST['email'] . '.' . $fileExtension;
                    $uploadFileDir = $_SERVER['DOCUMENT_ROOT'] . '/img/';
                    $dest_path = $uploadFileDir . $newFileName;
                    move_uploaded_file($fileTmpPath, $dest_path);
            } else {
                    $newFileName = "No_image_available.svg.png";
            };
                $users->firstname = $_POST['firstName'];
                $users->lastname = $_POST['lastName'];
                $users->email = $_POST['email'];
                $users->phone = $_POST['phone'];
                $users->password = $_POST['password'];
                $users->image = $newFileName;

                $users->registerUser();?>

                <div id="MyModalWindow" class="collapse in" style="margin-top: 10px">
                    <div class="container">
                        <div class="row">
                            <a href="../../views/site/login.php" class="col-md-12 btn btn-success text-right" data-toggle="collapse" data-target="#MyModalWindow">Registration is successful</a></p>
                        </div>
                    </div>
                </div>
                <?php
        } else { ?>
                <div id="MyModalWindow" class="collapse in" style="margin-top: 10px">
                    <div class="container">
                        <div class="row">
                            <button class="col-md-12 btn btn-danger text-right" data-toggle="collapse" data-target="#MyModalWindow">This e-mail is already in use. Registration is failed</button></p>
                        </div>
                    </div>
                </div>
                <?php
        }
    }
}
