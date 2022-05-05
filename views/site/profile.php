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
$usersArr = $user->getUserId();

?>
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <h2 style="text-align: center"> My profile</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <img src="<?php echo '../../img/' . $usersArr['image'] ?>" alt="Avatar" class="img-responsive img-rounded">
            </div>
            <div class="col-md-7 col-md-offset-1">
                <table class="table table-bordered table-hover" title="Profile">
                    <tbody>
                    <tr class="bg-info">
                        <th >First Name</th>
                        <td><?php echo $usersArr['firstname'] ?></td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td><?php echo $usersArr['lastname'] ?></td>
                    </tr>
                    <tr class="bg-info">
                        <th>Password</th>
                        <td><?php echo $usersArr['password'] ?></td>
                    </tr>
                    <tr>
                        <th> <i class="glyphicon glyphicon-earphone"></i> </th>
                        <td><?php echo $usersArr['phone'] ?></td>
                    </tr>
                    <tr class="bg-info">
                        <th><i class="glyphicon glyphicon-envelope"></i></th>
                        <td><?php echo $usersArr['email'] ?></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

<div id="MyModalWindow" class="collapse in" style="margin-top: 10px">
    <div class="container">
        <div class="row">
            <a href="../../views/site/updateProfile.php" class="col-md-12 btn btn-info text-right" data-toggle="collapse" data-target="#MyModalWindow">Update profile</a></p>
        </div>
    </div>
</div>
