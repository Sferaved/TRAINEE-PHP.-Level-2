<?php

set_include_path($_SERVER['DOCUMENT_ROOT']);

require "models/Post.php";
$post = new Post();

$post->user_id = $_POST['user_id'];
$post->post_text = $_POST['post_text'];
$post->date = $_POST['date'];
$post->addPost();
