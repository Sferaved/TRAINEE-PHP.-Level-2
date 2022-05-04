<?php

set_include_path ($_SERVER['DOCUMENT_ROOT']);

require "views/layouts/header.php";
require "views/layouts/navigation.php";
require "views/layouts/footer.php";

require "models/User.php";

?>
  <br><br><br><br><br>
  <div class="container">
        <div class="row">
            <form role="form" action="#" class="form-horizontal" method="post">
                <div class="form-grope">
                    <label for="firstName" class="control-label col-md-2" >First name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Andrii" required><br>
                    </div>
                </div>
                <div class="form-grope">
                    <label for="lastName" class="control-label col-md-2" >Last Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Korzhov" required><br>
                    </div>
                </div>
                <div class="form-grope">
                    <label for="email" class="control-label col-md-2"><i class="glyphicon glyphicon-envelope"></i></label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" name="email" id="email" placeholder="andrey18051@gmail.com" required><br>
                    </div>
                </div>
                <div class="form-grope">
                    <label for="phone" class="control-label col-md-2"><i class="glyphicon glyphicon-earphone"></i></label>
                    <div class="col-md-10">
                        <input type="tel"   class="form-control" name="phone" id="phone" placeholder="+38 (093) 673-44-88" required><br>
                    </div>
                </div>
                <div class="form-grope">
                    <label for="password" class="control-label col-md-2" >Password</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required><br>
                    </div>
                </div>

                <div class="form-grope">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <button  type="submit"  class="btn btn-success" >
                            Submit
                        </button>
                        <button  type="reset"  class="btn btn-danger" >
                            Reset
                        </button>
                   </div>
                </div>

            </form>
        </div>
    </div>
<?php

if (isset($_POST['email'])) {
    $users = new User();
    $users->firstname = $_POST['firstName'];
    $users->lastname = $_POST['lastName'];
    $users->email = $_POST['email'];
    $users->phone = $_POST['phone'];
    $users->password = $_POST['password'];

    $users->registerUser();
}

