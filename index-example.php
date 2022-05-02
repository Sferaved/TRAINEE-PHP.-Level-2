<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="_assets/css/bootstrap.min.css" rel="stylesheet">
    <title>My bootstrap</title>
</head>
<body>
<header>
   <div class="container-fluid">
       <div class="row">
           <nav class="nav navbar-default navbar-inverse" >
               <div class="navbar-header">
                   <a href="#" class="navbar-brand">My bootstrap</a>
               </div>
               <div class="container">
                   <ul class="nav navbar-nav navbar-right">
                       <li>
                           <form action="#" role="search" class="navbar-form">
                               <input type="text" class="form-control" name="search" placeholder="world for search">
                               <input type="submit" class="btn">
                           </form>
                       </li>

                       <li><a href="#">Main</a></li>
                       <li><a href="#">First</a></li>
                       <li><a href="#">Second</a></li>
                       <li>
                               <a class="dropdown-toggle" data-toggle="dropdown"> Список <span class="caret"></span></a>
                               <ul class="dropdown-menu">
                                   <li><a href="https://google.com">Google</a></li>
                                   <li><a href="https://bing.com">Bing</a></li>
                               </ul>
                        </li>
                   </ul>
               </div>

           </nav>
       </div>
   </div>
</header>
<main>
    <button class="btn btn-info" data-toggle="modal" data-target="#MyModalWindow">My Modal Window</button>
    <div id="MyModalWindow" class="modal fade"  tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="model-content">
                <div class="modal-header">
                    <h4 class="modal-title"> Modal header</h4>
                </div>
                <div class="modal-body">
                    Modal body
                </div>
                <div class="modal-footer">
                    Modal footer
                    <button class="btn btn-success" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <br>
    <?php
        echo $_GET['search']; ?>
    <br>
    <div class="container-fluid">
        <div class="row">
            <a type="button" href="https://google.com" class="btn btn-primary"><span class="glyphicon glyphicon-link"></span>Google</a>
            <a type="button" href="https://bing.com" class="btn btn-danger"><span class="glyphicon glyphicon-apple"></span>Bing</a>
            <button class="btn btn-default" data-toggle="collapse" data-target="#mytable">Collapse</button>

        </div>

    </div>
    <br>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Список <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Элемент 1</a></li>
            <li><a href="#">Элемент 2</a></li>
            <li><a href="#">Элемент 3</a></li>
        </ul>
    </div>
    <br>
    <div class="container">
        <ul class="nav nav-pills">
            <li><a href="#main" class="tab" data-toggle="pill">Main</a></li>
            <li><a href="#profile" class="tab" data-toggle="pill">Profile</a></li>
            <li><a href="#message" class="tab" data-toggle="pill">Message</a></li>
            <li><a href="#settings" class="tab" data-toggle="pill">Settings</a></li>
        </ul>
        <div class="tab-content">
            <div id="main" class="tab-pane">Main</div>
            <div id="profile" class="tab-pane">Profile</div>
            <div id="message" class="tab-pane">Message</div>
            <div id="settings" class="tab-pane">Settings</div>
        </div>
    </div>
    <br>
    <div class="container">
        <ul class="nav nav-tabs">
            <li><a href="#main1" class="tab" data-toggle="tab">Main</a></li>
            <li><a href="#profile1" class="tab" data-toggle="tab">Profile</a></li>
            <li><a href="#message1" class="tab" data-toggle="tab">Message</a></li>
            <li><a href="#settings1" class="tab" data-toggle="tab">Settings</a></li>
        </ul>
        <div class="tab-content">
            <div id="main1" class="tab-pane">Main</div>
            <div id="profile1" class="tab-pane">Profile</div>
            <div id="message1" class="tab-pane">Message</div>
            <div id="settings1" class="tab-pane">Settings</div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <form role="form" action="#" class="form-horizontal">
              <div class="form-grope">
                    <label for="email" class="control-label col-md-2 text-success">Email</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" name="email" id="email" placeholder="input email" required><br>
                    </div>
                </div>

                <div class="form-grope">
                    <label for="password" class="control-label col-md-2 text-warning" >Password</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" name="password" id="password" placeholder="input password" required><br>
                    </div>

                </div>

                <div class="form-grope">
                    <label for="month" class="control-label col-md-2 text-info">Month</label>
                    <div class="col-md-10">
                        <select class="form-control" id="month">
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                        </select><br>
                    </div>
                </div>

                <div class="form-grope">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <button  type="submit"  class="btn btn-primary" data-toggle="tooltip" title="нажми меня">
                            <i class="glyphicon glyphicon-alert"> </i> Отправить
                        </button>
                   <!--     <input type="submit" class="btn btn-danger glyphicon glyphicon-inbox"> -->
                    </div>
                </div>

            </form>
        </div>

    </div>

    <div class="container-fluid" style="text-align: center">
        <div class="row">

            <div class="col-md-6">
                <img src="https://klike.net/uploads/posts/2018-12/1545120159_1.jpg" alt="image" class="img-responsive img-thumbnail" style="height: 200px;">
            </div>

            <div class="col-md-6">
                <img src="https://klike.net/uploads/posts/2018-12/1545120122_4.jpg" alt="image" class="img-responsive img-thumbnail" style="height: 200px">
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">heading</div>
                    <div class="panel-body">body</div>
                    <div class="panel-footer">footer</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-danger">
                    <div class="panel-heading">heading</div>
                    <div class="panel-body">body</div>
                    <div class="panel-footer">footer</div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid" style="height:100px">
        <div class="row">
            <div class="col-md-6">
                <p class="text-primary text-left">Primary left</p>
                <p class="text-success text-right">Success right</p>
                <p class="text-danger text-justify">Danger justify</p>
                <p class="text-info text-center">Info center</p>
                <p class="text-warning text-nowrap">Warning nowrap</p>

            </div>
            <div class="col-md-6">
                <p class="bg-primary">Primary</p>
                <p class="bg-success">Success</p>
                <p class="bg-danger">Danger</p>
                <p class="bg-info">Info</p>
                <p class="bg-warning">Warning</p>
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <blockquote>
                    Очень умная фигня  blockquote!
                    <footer>
                        Andrii Korzhov
                    </footer>
                </blockquote>

            </div>
            <div class="col-md-4">
                <code>
                    for, while, do while
                </code>
            </div>
            <div class="col-md-4">
                <pre>
                    for (i, i<=10, i++) {
                        print ('Тег  pre')
                    }
                </pre>
            </div>
        </div>
    </div>


    <div class="table-responsive container collapse in" id="mytable">
        <div class="row">
            <table class="table table-bordered table-hover" data-toggle="tooltip" title="Моя таблица">
                <thead>
                <tr class="active">
                    <th>Name</th>
                    <th>Telephone</th>
                    <th>E-mail</th>
                </tr>
                </thead>
                <tbody>
                <tr class="success">
                    <td>Andrii</td>
                    <td>+380936734488</td>
                    <td>andrey18051@gmail.com</td>
                </tr>
                <tr class="warning">
                    <td>Hanna</td>
                    <td>+380936734455</td>
                    <td>any26113@gmail.com</td>
                </tr>
                <tr class="danger">
                    <td>Mykyta</td>
                    <td>+380936734477</td>
                    <td>starpom000@gmail.com</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
    -->
</main>
<footer>

</footer>
</body>
</html>