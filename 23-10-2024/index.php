<?php

$exibir = false;

if (
  !empty($_GET["nome"]) && isset($_GET["nome"]) &&
  !empty($_GET["sobrenome"]) && isset($_GET["sobrenome"]) &&
  !empty($_GET["idade"]) && isset($_GET["idade"])
) {

  $nome = $_GET["nome"];
  $sobrenome = $_GET["sobrenome"];
  $anoNascimento = (int) date("Y") - (int) $_GET["idade"];
  $exibir = true;
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
  <form>
    <input type="text" name="nome" placeholder="Informe seu nome...">
    <input type="text" name="sobrenome" placeholder="Informe seu sobrenome...">
    <input type="number" min=0 max=150 name="idade" placeholder="Idade...">
    <button type="submit">Enviar</button>
  </form>
  <hr>
  <?php if ($exibir): ?>
    <p>Seja bem-vindo <?= $nome ?> <?= $sobrenome ?>, você nasceu em <?= $anoNascimento ?>.</p>
  <?php endif ?>
</body>

</html>