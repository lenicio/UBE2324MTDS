<?php 
require "./adicionar.php";

session_start();

if (!isset($_SESSION["todo"])) {
  $_SESSION["todo"] = [];
}

adicionarItem($_POST);

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="./index.php" method="POST">
    <input type="text" name="num1" id="">
    <input type="text" name="num2" id="">
    <input type="text" name="num3" id="">
    <button type="submit"></button>
  </form>
  <h1>TODO</h1>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Descrição</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($_SESSION["todo"] as $item): ?>
        <tr>
          <td><?=$item["id"]?></td>
          <td><?=$item["titulo"]?></td>
          <td><?=$item["descricao"]?></td>
          <td><?=$item["status"]?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</body>
</html>
