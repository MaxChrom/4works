<?php

class User
{

    public $id;
    public $name;
    public $email;

   
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbName = '4works';
    private $database;

    public function __construct()
    {
        try {
            $this->database = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);
        } catch (PDOException $e) {
            die('Error connecting to database: ' . $e->getMessage());
        }
    }

    public function getUserData($user_id)
    {

        $stmt = $this->database->prepare("SELECT * FROM users WHERE user_id = :id");
        $stmt->bindParam(':id', $user_id, PDO::PARAM_INT);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        return $userData;
    }
}

