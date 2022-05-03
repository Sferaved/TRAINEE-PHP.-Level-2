<?php

$connection = new PDO('mysql:host=localhost;dbname=mvc_base;charset=utf8', 'root', '');
$posts = $connection->query("SELECT * FROM `posts`");
$postsArr = $posts->fetchAll();

$users = $connection->query("SELECT * FROM `users`");
$usersArr = $users->fetchAll();
