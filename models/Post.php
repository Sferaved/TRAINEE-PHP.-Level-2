<?php

class Post
{
    public $id;
    public $user_id;
    public $post_text;
    public $date;


    protected $connection;
    protected $postsArr;

    public function __construct()
    {
        $this->connection = new PDO('mysql:host=localhost;dbname=mvc_base;charset=utf8', 'root', '');
    }

    public function getPosts(): array
    {
        $posts = $this->connection->query("SELECT * FROM `posts`");
        $this->postsArr = $posts->fetchAll();

        return $this->postsArr;
    }
}
