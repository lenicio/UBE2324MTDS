<?php

$numero1 = (int) $_GET["numero1"];
$numero2 = (int) $_GET["numero2"];

var_dump($numero1);

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <form method="get" action="./index.php">
    <label for="numero1">Informe sua numero1</label>
    <input type="number" name="numero1" id="numero1">

    <label for="numero2">Informe sua numero2</label>
    <input type="number" name="numero2" id="numero2">

    <button type="submit">Calcular</button>
  </form>

</body>

</html>