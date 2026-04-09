<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use League\Plates\Engine;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();


$templates = new Engine(__DIR__ . '/../src/Views');

echo $templates->render('home');