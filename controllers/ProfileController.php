<?php

class ProfileController
{
    public function update($email)
    {
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
        $users->email = $email;
        $users->phone = $_POST['phone'];
        $users->password = $_POST['password'];
        $users->image = $newFileName;

        $users->updateUser();?>

        <div id="MyModalWindow" class="collapse in" style="margin-top: 10px">
            <div class="container">
                <div class="row">
                    <a href="../../views/site/posts.php" class="col-md-12 btn btn-success text-right" data-toggle="collapse" data-target="#MyModalWindow" >Update is successful</a></p>
                </div>
            </div>
        </div>
        <?php
    }
}