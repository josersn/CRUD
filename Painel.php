<?php

require("App/Controllers/User.php");
$user = new \App\Controllers\User();
if($user->read() != null){
}else {
    echo  "<h2>Nem um Cliente Cadastrado</h2>";
}
if(isset($_POST['sair'])){
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel do Administrador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="line">
    <h2>
        Lista de Usuarios
    </h2>
    <a href="newUser.php" class="link-new">Novo Usuario.</a>
    <form action="#" method="post">
    <button href="index.php" name="sair">Sair</button>
    </form>
</div>
<div class="list">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Editar</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
<?php
    foreach ($user->read() as $client){
?>
    <tr>
      <th><?= $client['nome']?></th>
      <td><?= $client['sobrenome']?></td>
      <td><?= $client['email']?></td>
      <td><a href="edit.php">Editar</a></td>
      <td><a href="deletar.php">Excluir</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</body>
</html>
