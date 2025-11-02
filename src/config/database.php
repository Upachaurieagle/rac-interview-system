<?php
// src/config/database.php
class Database {
    private $host = "127.0.0.1";
    private $db_name = "rac_interview";
    private $username = "root";
    private $password = ""; // default XAMPP has empty password
    public $conn;

    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO(
                "mysql:host=".$this->host.";dbname=".$this->db_name.";charset=utf8mb4",
                $this->username,
                $this->password,
                [
                  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        } catch(PDOException $exception){
            // For local dev it's okay to show error, but don't do this in production
            echo "Database connection error: " . $exception->getMessage();
            exit;
        }
        return $this->conn;
    }
}
