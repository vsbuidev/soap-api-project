<?php
require_once '../config/database.php';
require_once 'User.php';

class UserService
{
    private $db;
    private $user;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->user = new User($this->db);
    }

    public function getUsers()
    {
        return $this->user->read();
    }

    public function addUser($name, $email)
    {
        return $this->user->create($name, $email);
    }
}
