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
                <h1 style="text-align: center"> My profile</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-1">
                <img src="../../img/No_image_available.svg.png" alt="No foto" class="img-responsive img-rounded">
            </div>
            <div class="col-md-8 col-md-offset-1">
                <table class="table table-bordered table-hover" title="Profile">
                    <tbody>
                    <tr class="bg-info">
                        <th >First Name</th>
                        <td><?php echo $usersArr['firstname'] ?> </td>
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
