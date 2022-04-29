<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Posts</title>
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
    <br>
    <?php
    for ($i = 1; $i <= 8; $i++) { ?>
        <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 bg-primary">
                <img src="img/No_image_available.svg.png" alt="No foto" class="img-responsive img-rounded" height ="50" width="50" style="float: left">
                Andrii Korzhov
            </div>

            <div class="col-md-10 col-md-offset-1 bg-info">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Quisque suscipit scelerisque odio, vel accumsan magna ultricies mollis.
                Nunc in maximus purus, pretium vulputate ligula. Donec eleifend dolor ut fringilla lacinia.
                Donec ut libero eros. Praesent vitae elementum nisl. Praesent semper euismod dapibus.
            </div>
            <div class="col-md-10 col-md-offset-1 bg-warning" >
                12-05-2022
            </div>
        </div>
        </div>
    </div>
    <br>
    <?php  } ?>

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
