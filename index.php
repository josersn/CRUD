<?php
session_start();

if(isset($_POST['btn-entrar'])){
    require ("App/Controllers/Login.php");
    $login = new \App\Controller\Login();
    $mail = filter_var($_POST['login'], FILTER_SANITIZE_STRIPPED);
    $pasword = filter_var($_POST['senha'], FILTER_SANITIZE_STRIPPED);
    $login->entrar($mail, $pasword);

    
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - CRUD</title>
</head>
<body>
    <main>
        <form action="" method="post">
        <label for="login">Usuário :</label>
            <input type="text" name="login" id="login" required>
            <label for="senha">Senha :</label>
            <input type="password" name="senha" id="senha" required>
            <button type="submit" name="btn-entrar">Entrar</button>
        </form>
    </main>
</body>
</html>




