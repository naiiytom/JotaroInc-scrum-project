<?php
class Database {
    private $host = "10.199.66.227";
    private $username = "20S1_g3";
    private $password = "V6b8dR48";
    private $dbname = "";
    public $conn;

    public function getConnection() {
        $this -> conn = null;
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            echo "Database connected";
            
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>