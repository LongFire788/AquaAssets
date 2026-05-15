<?php

namespace App\Controllers;

use App\Models\User;
use League\Plates\Engine;


class AuthController{

    public function showLogin(){
        //Redireciona para index caso logado e login caso deslogado
        if(isset($_SESSION['user_id'])){
            header('Location: /dashboard');
            exit;
        }
        $templates = new Engine(__DIR__ . '/../Views/');
        echo $templates->render('App/login');
    }

    public function auth(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = trim( $_POST['senha'] ?? '' );
            if(empty($password)){
                echo "A senha é obrigatoria";
                $this->showLogin();
                exit;
            }

            //Cria o objeto
            $userModel = new User();

            //Chama a função de login
            $userLogin = $userModel->login($email, $password);

            //Testa se deu certo
            if($userLogin !== false){
                $_SESSION['user_id'] = $userLogin['id_colaborador'];
                $_SESSION['eh_gerenciador'] = $userLogin['eh_gerenciador'];
                header('Location: /dashboard');
                exit;
            }else{
                echo "Email ou senha inválidos.";
                $this->showLogin();
            }
        }
    }
}



    

    




?>