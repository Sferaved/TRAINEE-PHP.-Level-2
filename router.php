<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$segments = explode('/', trim($uri, '/'));


if (empty($segments[1]) || $segments[1] === 'index.php') {
    require 'views/site/site.php';
}
else {
    switch ($segments[2]) {
        case 'login.php':
            require 'views/site/login.php';
            break;
        case 'posts.php':
            require 'views/site/posts.php';
            break;
        case 'profile.php':
            require 'views/site/profile.php';
            break;
        case 'updateProfile.php':
            require 'views/site/updateProfile.php';
            break;
        case 'logout.php':
            require 'views/site/logout.php';
            break;
        case 'post_new.php':
            require 'views/site/post_new.php';
            break;
    };
}



