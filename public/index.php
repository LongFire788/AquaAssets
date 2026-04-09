<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use League\Plates\Engine;

// 1. Carrega as variáveis de ambiente (.env)
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();

// 2. Inicializa o motor de templates (Plates)
// Apontamos para a pasta src/Views onde estarão nossos arquivos .php
$templates = new Engine(__DIR__ . '/../src/Views');

// 3. Renderiza a Landing Page (home.php)
// O Plates vai procurar por um arquivo chamado 'home.php' em src/Views
echo $templates->render('home');