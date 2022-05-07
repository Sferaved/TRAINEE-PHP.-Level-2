<?php

class User
{
    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $password;
    public $image;

    protected $connection;
    protected $statement;
    protected $usersArr;
    protected $userName;
    protected $userValidate;

    public function __construct()
    {
        $this->connection = new PDO('mysql:host=localhost;dbname=mvc_base;charset=utf8', 'root', '');
    }

    public function newUserValidate($email): bool
    {
        $users = $this->connection->query("SELECT * FROM `users`");
        $this->usersArr = $users->fetchAll();

        $this->userValidate = true;
        foreach ($this->usersArr as $item) {
            if ($item['email'] == $email) {
                $this->userValidate = false;
            }
        }
        return $this->userValidate;
    }

    public function getUsers(): array
    {
        $users = $this->connection->query("SELECT * FROM `users`");
        $this->usersArr = $users->fetchAll();

        return $this->usersArr;
    }

    public function getUser(): array
    {
        $this->statement = $this->connection->prepare("SELECT `id`, `firstname`, `lastname`, `email`, `phone`, `password` , `image` FROM `users` WHERE `email` = '$this->email'");
        $this->statement->execute();
        $this->usersArr = $this->statement->fetch();
        return $this->usersArr;
    }

    public function getUserId(): int
    {
        $this->statement = $this->connection->prepare("SELECT `id` FROM `users` WHERE `email` = '$this->email'");
        $this->statement->execute();
        $this->usersArr = $this->statement->fetch();
        return $this->usersArr['id'];
    }

    public function getUserName(): string
    {
        $this->statement = $this->connection->prepare("SELECT `id`, `firstname`, `lastname`, `email`, `phone`, `password` FROM `users` WHERE `email` = '$this->email'");
        $this->statement->execute();
        $this->usersArr = $this->statement->fetch();
        $this->userName = $this->usersArr['firstname'] . " " . $this->usersArr['lastname'];
        return $this->userName;
    }

    public function registerUser()
    {
        $this->statement = $this->connection->prepare("INSERT INTO `users`(`id`, `firstname`, `lastname`, `email`, `phone`, `password`, `image`)
            VALUES (null,'$this->firstname','$this->lastname','$this->email','$this->phone','$this->password','$this->image');");
        $this->statement->execute();
    }

    public function updateUser()
    {
        $this->statement = $this->connection->prepare("UPDATE `users` SET `firstname` = '$this->firstname',`lastname` = '$this->lastname', 
                   `phone` = '$this->phone', `password` = '$this->password' , `image` = '$this->image' WHERE `email` = '$this->email'");
        $this->statement->execute();
    }

    public function userVerify(): bool
    {
        $this->statement = $this->connection->prepare("SELECT `email`, `password` FROM `users` WHERE `email` = '$this->email'");
        $this->statement->execute();
        $this->usersArr = $this->statement->fetch();

        if (isset($this->usersArr)) {
            if ($this->usersArr['password'] == $this->password) {
                return true;
            } else {
                return false;
            };
        } else {
            return false;
        }
    }
}
