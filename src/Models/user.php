<?php

namespace App\Models;

class User{
    private $db;

    // Conecta ao banco de dados
    public function __construct($db_connect){
        $this->db = $db_connect;
    }

    public function login(){
        
    }
}

?>