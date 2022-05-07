<header>
    <div class="container-fluid">
        <div class="row">
            <nav class="nav navbar-default navbar-inverse" >
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href = "index.php" class="navbar-brand">MVC bootstrap</a>
                </div>
                <div class="container navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="views/site/posts.php">Posts</a></li>
                        <?php
                        if ($_SESSION['userName'] !== null) {?>
                            <li><a href="views/site/profile.php">Profile</a></li>
                            <li><a id="href_log" href="views/site/logout.php"><?php echo $_SESSION['userName'] . ' '?>(Logout)</a></li>
                            <?php
                        } else { ?>
                            <li><a id="href_log" href="views/site/login.php">Login</a></li>
                            <?php
                        }
                        ?>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<main>
