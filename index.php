<!--
### Não foram adicionados
###SEO
### proteções contra ataque  CSRF
### autoload
-->
<?php
session_start();
ob_start();
require ("App/Core/Connect.php");

    if(isset($_POST['login'])){
        require ("App/Controllers/Login.php");
        $controller = new \App\Controllers\Login();
        $mail = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
        $pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
        $controller->login($mail, $pass);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Sistema de CRUD</title>
</head>
<body>
    <main class="main-login">
        <div class="login">
            <form action="" class="login-form" method="post">
                <input type="text" placeholder="login" name="login">
                <input type="password" placeholder="Senha" name="pass">
                <a href="#">Esqueceu Senha</a>
                <button name="login">Entrar</button>
            </form>
        </div>
    </main>
<?php
use App\Core\Connect;
$con = Connect::getInstance();
var_dump($con);
?>
</body>
</html>