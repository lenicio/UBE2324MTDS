<?php
session_start();

if (empty($_SESSION["usuario"]) || !isset($_SESSION["usuario"])) {
  header("Location: ./index.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php if ($_SESSION["usuario"]["permissao"]): ?>
    <a href="./administracao.php">Administração</a>
  <?php endif ?>
  <a href="./logoff.php">Fazer Logoff</a>
  <h1>Seja bem vindo, <?=$_SESSION["usuario"]["nome"]?></h1>
  <h1>Você está autenticado.</h1>
</body>
</html>