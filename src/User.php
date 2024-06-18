<?php
class User
{
    private $conn;
    private $table = 'users';

    public $id;
    public $name;
    public $email;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function read()
    {
        $query = 'SELECT id, name, email FROM ' . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($name, $email)
    {
        $query = 'INSERT INTO ' . $this->table . ' SET name = :name, email = :email';
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
