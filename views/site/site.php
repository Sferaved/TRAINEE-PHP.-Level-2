<?php

session_start([
    'cookie_lifetime' => 86400,
]);

set_include_path($_SERVER['DOCUMENT_ROOT']);

require "views/layouts/header.php";
require "views/layouts/navigation_site.php";


?>

    <div class="jumbotron">
        <div class="container">
            <h1 class="text-center">Welcome to My project on Bootstrap.3!!!</h1>
              <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Quisque suscipit scelerisque odio, vel accumsan magna ultricies mollis.
                  Nunc in maximus purus, pretium vulputate ligula. Donec eleifend dolor ut fringilla lacinia.
                  Donec ut libero eros. Praesent vitae elementum nisl. Praesent semper euismod dapibus.
                  Proin efficitur volutpat lectus, nec efficitur ex tristique at. Nulla facilisi.</p>
            <div class="container text-center">
                <a href="views/site/login.php" class="btn btn-success btn-lg" >Login &raquo;</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-md-3">
            <h2 class="text-center">Item 1</h2>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Quisque suscipit scelerisque odio, vel accumsan magna ultricies mollis.
                Nunc in maximus purus, pretium vulputate ligula. Donec eleifend dolor ut fringilla lacinia.
                Donec ut libero eros. Praesent vitae elementum nisl. Praesent semper euismod dapibus.
                Proin efficitur volutpat lectus, nec efficitur ex tristique at. Nulla facilisi.</p>
            <a href="#" class="btn btn-info">More &raquo;</a>
        </div>
        <div class="col-md-3">
            <h2 class="text-center">Item 2</h2>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Quisque suscipit scelerisque odio, vel accumsan magna ultricies mollis.
                Nunc in maximus purus, pretium vulputate ligula. Donec eleifend dolor ut fringilla lacinia.
                Donec ut libero eros. Praesent vitae elementum nisl. Praesent semper euismod dapibus.
                Proin efficitur volutpat lectus, nec efficitur ex tristique at. Nulla facilisi.</p>
            <a href="#" class="btn btn-info">More &raquo;</a>
        </div>
        <div class="col-md-3">
            <h2 class="text-center">Item 3</h2>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Quisque suscipit scelerisque odio, vel accumsan magna ultricies mollis.
                Nunc in maximus purus, pretium vulputate ligula. Donec eleifend dolor ut fringilla lacinia.
                Donec ut libero eros. Praesent vitae elementum nisl. Praesent semper euismod dapibus.
                Proin efficitur volutpat lectus, nec efficitur ex tristique at. Nulla facilisi.</p>
            <a href="#" class="btn btn-info">More &raquo;</a>
        </div>
        <div class="col-md-3">
            <h2 class="text-center">Item 4</h2>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Quisque suscipit scelerisque odio, vel accumsan magna ultricies mollis.
                Nunc in maximus purus, pretium vulputate ligula. Donec eleifend dolor ut fringilla lacinia.
                Donec ut libero eros. Praesent vitae elementum nisl. Praesent semper euismod dapibus.
                Proin efficitur volutpat lectus, nec efficitur ex tristique at. Nulla facilisi.</p>
            <a href="#" class="btn btn-info">More &raquo;</a>
        </div>
    </div>
<?php
require "views/layouts/footer.php";
