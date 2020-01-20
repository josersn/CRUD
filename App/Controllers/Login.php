<?php


namespace App\Controllers;


use App\Core\Connect;
use PDO;

class Login extends Connect
{
    public function login(string $email,string $senha)
    {
       $sql = "SELECT * FROM login WHERE login = :email AND senha = :senha";
       $db = self::getInstance();
        $stmt = $db->prepare($sql);

        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':senha', $email, PDO::PARAM_STR);
        $stmt->execute();

       var_dump($stmt);
    }
}

//$sql  = "SELECT * FROM login WHERE login = :email AND senha = :senha";
//$db = Connect::getInstance();
//$stmt = $db->prepare($sql);
//
//$stmt->bindValue(':email', $email, PDO::PARAM_STR);
//$stmt->bindValue(':senha', $senha, PDO::PARAM_STR);
//
//$stmt->execute();
//
//if ($stmt-> rowCount() == 1) {
//    echo "foi";
//    $_SESSION['logado'] = true;
//          header("Location: Logado.php");
//    return true;
//} else {
//    echo "caiu no false";
//
//    return false;
//}