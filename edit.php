<?php

$name = $_GET['name'];
require ("App/Controllers/User.php");
$user = new \App\Controllers\User();
if(isset($_POST)){
    $user->update();
}
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar Cliente</title>
</head>
<body>
    <div class="line">
        <h2>Atualizar cliente</h2>
    </div>
</body>
</html>

