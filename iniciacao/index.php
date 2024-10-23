<?php

// Métodos $_GET["chave"]      $_POST["chave"]


$idade = (int) $_GET["idade"];

$instituicao = "Proz Educação";
$nomeEstudante = "Lenício Jr";
$anoNascimento = 1996;

$idade = 2024 - $anoNascimento;

?>


<!DOCTYPE html> 
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./styles.css">
</head>
<body>
  <form>
    <label for="idade">Insira a idade: </label>
    <input type="number" name="idade" id="idade">
    <button type="submit">Enviar</button>
  </form>
</body>
</html>