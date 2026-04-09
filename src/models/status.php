<?php

namespace App\models;

class Status {
    private $id;
    private $nome;

    public function __construct($nome = null) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}