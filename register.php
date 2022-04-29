<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Register</title>
</head>
<body>
<header>
   <div class="container-fluid">
       <div class="row">
           <nav class="nav navbar-default navbar-inverse" >
               <div class="navbar-header">
                   <a href="index.php" class="navbar-brand">My bootstrap</a>
               </div>
                <div class="container">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Main</a></li>
                        <li><a href="#">First</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
             </nav>
       </div>
   </div>
</header>
<main>

  <br><br><br><br><br>
  <div class="container">
        <div class="row">
            <form role="form" action="#" class="form-horizontal">
                <div class="form-grope">
                    <label for="firstName" class="control-label col-md-2" >First name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="password" id="firstName" placeholder="Andrii" required><br>
                    </div>
                </div>
                <div class="form-grope">
                    <label for="lastName" class="control-label col-md-2" >Last Name</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" name="lastName" id="lastName" placeholder="Korzhov" required><br>
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
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</main>

<footer class="footer navbar-fixed-bottom navbar-inverse">
    <div class="container-fluid">
        <h6 class="text-primary text-center"> Copyright (c) 2022</h6>
    </div>
</footer>

</body>
</html>
