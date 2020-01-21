<?php
if(isset($_POST['cadastrar'])){
    $dados = [
        "nome" => filter_var($_POST['nome'], FILTER_SANITIZE_STRING),
        "sobrenome" => filter_var($_POST['sobrenome'], FILTER_SANITIZE_STRING),
        "email" => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
        "celular" => filter_var($_POST['celular'], FILTER_SANITIZE_NUMBER_INT),
        "endereco" => filter_var($_POST['endereco'], FILTER_SANITIZE_STRING),
        "numero" => filter_var($_POST['numero'], FILTER_SANITIZE_STRING),
        "complemento" => filter_var($_POST['complemento'], FILTER_SANITIZE_STRING),
        "bairro" => filter_var($_POST['bairro'], FILTER_SANITIZE_STRING),
        "cidade" => filter_var($_POST['cidade'], FILTER_SANITIZE_STRING),
        "estado" => filter_var($_POST['estado'], FILTER_SANITIZE_STRING),
        "usuario" => filter_var($_POST['usuario'], FILTER_SANITIZE_STRING),
        "senha" => filter_var($_POST['senha'], FILTER_SANITIZE_STRING) ,
    ];
     require("App/Controllers/User.php");
     $user = new \App\Controller\User();
     $user->create($dados);
}
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="Painel.php">Voltar Para o Painel</a>
<form action="" method="post" class="form-newuser">
    <label for="nome">Nome :</label>
    <input type="text" required name="nome" id="nome">
    <label for="sobrenome">Sobrenome :</label>
    <input type="text" required name="sobrenome" id="sobrenome">
    <label for="email">E-mail :</label>
    <input type="text" required name="email" id="email">
    <label for="number">Número de Telefone:</label>
    <input type="text" required name="celular" id="celular">
    <label for="endereco">Endereço :</label>
    <input type="text" required name="endereco" id="endereco">
    <label for="number">Número :</label>
    <input type="number" required name="numero" id="numero">
    <label for="complemento">Complemento :</label>
    <input type="text" required name="complemento" id="complemento">
    <label for="bairro">Bairro :</label>
    <input type="text" required name="bairro" id="bairro">
    <label for="cidade">Cidade :</label>
    <input type="text" required name="cidade" id="cidade">
    <label for="estado">Estado :</label>
    <input type="text" required name="estado" id="estado">
    <label for="usuario">Usuário :</label>
    <input type="text" required name="usuario" id="usuario">
    <label for="senha">Senha :</label>
    <input type="password" required name="senha" id="senha">
    <button type="submit" required name="cadastrar">Inscrever Cliente</button>
</form>
</body>
</html>
