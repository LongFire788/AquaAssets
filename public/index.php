<?php

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

use App\Config\Database;

$db = new Database();
$conexao = $db->get_connection();

if ($conexao instanceof \PDO) {
    echo "<h1>✅ Conexão estabelecida!</h1>";
    echo "O AquaAssets já consegue conversar com o SQL Server.";
}

?>