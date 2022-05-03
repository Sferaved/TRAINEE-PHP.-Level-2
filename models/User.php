<?php

class User
{
    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $password;

    protected $connection;
    protected $statement ;
    protected $usersArr;

    public function __construct()
    {
        $this->connection = new PDO('mysql:host=localhost;dbname=mvc_base;charset=utf8', 'root', '');
    }

    public function getUsers(): array
    {
        $users = $this->connection->query("SELECT * FROM `users`");
        $this->usersArr = $users->fetchAll();

        return $this->usersArr;
    }

    public function registerUser()
    {
        $this->statement = $this->connection->prepare("INSERT INTO `users`(`id`, `firstname`, `lastname`, `email`, `phone`, `password`)
            VALUES (null,'$this->firstname','$this->lastname','$this->email','$this->phone','$this->password');");
        $this->statement->execute();
    }
}
