<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use League\Plates\Engine;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();

$templates = new Engine(__DIR__ . '/../src/Views');

// Pega a URL que o usuário digitou (ex: /credits)
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Lógica de Roteamento Simples
if ($uri === '/' || $uri === '/home') {
    echo $templates->render('home');
} elseif ($uri === '/credits') {
    echo $templates->render('credits');
} else {
    // Página 404 personalizada se quiser
    http_response_code(404);
    echo "Página não encontrada!";
}