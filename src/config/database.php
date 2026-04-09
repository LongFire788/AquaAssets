<?php

namespace App\config;

use PDO;
use PDOException;


class Database {
    private $host;
    private $dbname;
    private $user;
    private $pass;
    public $conn;
    
    public function __construct(){
        $this->host = $_ENV['DB_HOST'];
        $this->dbname = $_ENV['DB_NAME'];
        $this->user = $_ENV['DB_USER'];;
        $this->pass = $_ENV['DB_PASSWORD'];
    }

    public function get_connection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("sqlsrv:server={$this->host};Database={$this->dbname}", $this->user , $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Não foi possivel se conectar ao banco de dados.<br>\nErro:". $e->getMessage();
        }
        return $this->conn;
    }


}