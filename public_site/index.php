<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use League\Plates\Engine;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();

$templates = new Engine(__DIR__ . '/../src/Views');

$uri = strtolower(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); 

if ($uri === '/' || $uri === '/home') {
    echo $templates->render('Site/home');
} elseif ($uri === '/sobre') {
    echo $templates->render('Site/sobre');
} elseif ($uri === '/planos') {
    echo $templates->render('Site/planos');
} elseif ($uri === '/credits') {
    echo $templates->render('Site/credits');
} else {

    http_response_code(404);
    echo "Página não encontrada!";
}