<?php

$frutas = [
  "maça",
  "uva",
  "pera",
  "banana",
  "melancia",
  "mamão",
  "kiwi",
  "Mexerica",
  "pessego"
];

array_splice($frutas, 200, 1);

if (!empty($_GET["fruta"]) && isset($_GET["fruta"])) {
  $fruta = $_GET["fruta"];

  $indiceFruta = array_search($fruta, $frutas);
  if($indiceFruta) {
    array_splice($frutas, $indiceFruta, 1);
    echo "$fruta foi removida com sucesso!";
  }

}

array_push($frutas,"Manga"); // Adiciona elemento ao final do array
array_pop($frutas); // Remove e retona o ultimo elemento do array
array_splice($frutas,2, 1);  // Remove e reordena as chaves do array 
in_array("kiwi", $frutas); // Retorna true caso o termo pesquisado exista no array
array_search("kiwi", $frutas); // Retorna o índice do elemento procurado, caso exista

/*
  Faça um programa que receba do usuário o nome de uma fruta, e caso contenha a fruta no array,
  exclua a mesma, e mostre a mensagem, indicando que a mesma foi excluída.
*/

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <table border="1">
    <thead>
      <tr>
        <td>#</td>
        <td>Nome</td>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($frutas as $chave => $fruta): ?>
      <tr>
        <td><?=$chave?></td>
        <td><?=$fruta?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>

  <form action="./index.php" method="GET">
    <input type="text" name="fruta" placeholder="Informe um item para remover...">
    <button type="submit">Excluir</button>
  </form>
</body>
</html>

