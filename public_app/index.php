<?php
// 1. Carrega o Autoload e as Variáveis de Ambiente
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();

// 2. Inicia a sessão (Essencial para o App!)
session_start();

// 3. Pega a URL digitada
$uri = strtolower(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// 4. Sistema de Rotas do App
switch ($uri) {
    
    case '/':
    case '/login':
        // Instancia o nosso controlador
        $auth = new \App\Controllers\AuthController();
        
        // Se o formulário foi enviado (POST), processa o login
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth->auth();
        } else {
            // Se apenas acessou a página (GET), mostra a tela de login
            $auth->showLogin();
        }
        break;

    case '/dashboard':
        // Rota protegida! Verifica se tem crachá
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }
        // Futuramente, você chamará um DashboardController aqui
        echo "Bem-vindo ao Painel! Seu ID é: " . $_SESSION['user_id'];
        break;

    case '/logout':
        // Rota para sair do sistema
        session_destroy();
        header('Location: /login');
        exit;
        break;

    default:
        http_response_code(404);
        echo "Página do sistema não encontrada!";
        break;
}