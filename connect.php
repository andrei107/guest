<?php 

class DatabaseConnection {
    private $host = 'localhost';
    private $table = 'test_guest';
    private $user = 'root';
    private $password = 'root';
    private $connection = null;

    public function getConnection(){
        $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->table, $this->user, $this->password);
        
        return $this->connection;
    }
}