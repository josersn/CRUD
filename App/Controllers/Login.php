<?php

namespace App\Controllers;
require ("App/Core/Connect.php");


use App\Core\Connect;
use PDO;

class Login extends Connect
{
    public function entrar(string $mail,string $pass)
    {
        $db = self::getInstance();
        $sql = "SELECT * FROM login WHERE login = :mail AND senha = :senha";
        $stmt = $db->prepare($sql);

        $stmt->bindValue(":mail", $mail );
        $stmt->bindValue(":senha", $pass );

        $stmt->execute();

        if($stmt->rowCount() == 1){
            $dados = $stmt->fetch(PDO::FETCH_OBJ);
            $_SESSION["logado"] = true;
            $_SESSION["administrador"] = ['nome' => $dados->login];
            header("Location: Painel.php");
        }else {
                echo "<script>alert('Falha, Login e/ou Senha errada')</script>";
        }
    }

    public static function deslogar()
    {
        if (isset($_SESSION['logado'])) {
            unset($_SESSION['logado']);
            session_destroy();
            header("Location: index.php");
        }
    }

    public function redirect()
    {
        if(isset($_SESSION["logado"])){
            header("Location: index.php");
        }
    }
    
}