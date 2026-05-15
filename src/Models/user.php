<?php
namespace App\Models;
use App\Config\Database;
use PDO;

class User {
    private $conn;
    private $table = "Colaboradores";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->get_connection();
    }

    public function login($email, $password) {
        $query = "SELECT * FROM " . $this->table . " WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        // Verifica senha e se o colaborador está ativo (Status 1 = Ativo)
        if ($user && password_verify($password, $user['senha']) && $user['id_status_colaborador'] == 1) {
            return $user;
        }
        return false;
    }
}