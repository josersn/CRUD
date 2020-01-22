<?php

namespace App\Controllers;

require ("App/Core/Connect.php");

use App\Core\Connect;
use PDO;
class User extends Connect
{
    private $inserts = ['nome', 'sobrenome', 'email', 'celular', 'endereco', 'numero', 'complemento', 'bairro', 'cidade'
        , 'estado', 'usuario', 'senha'];
    public function create(array $datas_user)
    {
        $aux = 0;
        $datas = filter_var_array($datas_user , FILTER_SANITIZE_STRIPPED);
        $db = self::getInstance();
        $sql = "INSERT INTO clientes (nome, sobrenome, email, celular, endereco, numero, complemento, bairro, cidade, estado, usuario, senha) values (:nome,:sobrenome,:email,:celular,:endereco,:numero, :complemento, :bairro, :cidade, :estado, :usuario, :senha)";
        $stmt = $db->prepare($sql);

        foreach ($datas as $data){
            $stmt->bindValue(":". $this->inserts[$aux], $data);
            $aux++;
        }

        $stmt->execute();

        echo "<script>alert('Usuário Criado')</script>";

    }

    public function read()
    {
        $db = self::getInstance();
        $query = $db->query("SELECT * FROM clientes")->fetchAll(PDO::FETCH_ASSOC);
        return $query;
    }

    public function update($value, $column)
    {
        $db = self::getInstance();
//        $sql = "UPDATE clientes SET ";
    }

    public function delete($id)
    {
        $db = self::getInstance();
        $sql = "DELETE * FROM clientes WHERE id = :id";
        $stmt = $db->prepare($sql);

        $stmt->bindValue(":id", $id, FILTER_SANITIZE_NUMBER_INT);

        $stmt->execute();

        echo "<script>alert('Usuário deletado')</script>";

    }

    private function verifyMail(string $mail)
{
    $db = self::getInstance();
    $sql = "SELECT email FROM clientes WHERE email = :email";
    $stmt = $db->prepare($sql);

    $stmt->bindValue(":email", $mail);

    $stmt->execute();

    //return boolean to verify

}
private function verifyUser (string $user){
        $db = self::getInstance();
        $sql = "SELECT user FROM clientes WHERE user = :user";
        $stmt = $db->prepare();

        $stmt->bindValue(":user",$user);

        $stmt->execute();

        //return boolean to verify
}
}