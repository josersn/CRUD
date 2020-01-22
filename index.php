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
    <link rel="stylesheet" href="style.css">
    <title>Login - CRUD</title>
</head>
<body>
    <main>
        <div class="container">
            <img src="Assets/logo-pentaxial-10-anos.svg" alt="">
            <form action="" method="post" class="form-login">
                <label for="login">Usuário :</label>
                <input type="text" name="login" id="login" required>
                <label for="senha">Senha :</label>
                <input type="password" name="senha" id="senha" required>
                <button type="submit" name="btn-entrar">Entrar</button>
            </form>
        </div>
    </main>
</body>
</html>




