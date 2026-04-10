<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use League\Plates\Engine;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();

$templates = new Engine(__DIR__ . '/../src/Views');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/' || $uri === '/home') {
    echo $templates->render('home');
} elseif ($uri === '/sobre') {
    echo $templates->render('sobre');
} elseif ($uri === '/planos') {
    echo $templates->render('planos');
} elseif ($uri === '/credits') {
    echo $templates->render('credits');
} else {
    echo "Página não encontrada!";
}