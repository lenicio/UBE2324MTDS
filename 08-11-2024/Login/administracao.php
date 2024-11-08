<?php 
session_start();

if (!$_SESSION["usuario"]["permissao"]) {
  header("Location: ./home.php");
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
  <h1>Administração</h1>
</body>
</html>