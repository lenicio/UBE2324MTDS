<?php




/*

dontpad.com/lenicio

Crie um formulário, onde o usuário deverá digitar a fruta a ser pesquisada. Ao enviar o formulário,
deverá exibir a mensagem se contém ou não contém o elemento pesquisado.

Caso não tenha, exibir a mensagem em vermelho.
Caso tenha, exiba a mensagem em azul

*/

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




$informacao = [
  "exibirMensagem" => false,
  "classe" => "",
  "mensagem" => ""
];

if (!empty($_GET["filtro"]) && isset($_GET["filtro"])) {
  $filtro = $_GET["filtro"];
  $informacao["exibirMensagem"] = true;

  if (in_array($filtro, $frutas)) {
    $informacao["classe"] = "sucesso";
    $informacao["mensagem"] = "A palavra $filtro foi encontrada";
  } else {
    $informacao["classe"] = "erro";
    $informacao["mensagem"] = "A palavra $filtro não foi encontrada";
  }
}




?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Document</title>
</head>

<body>
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Fruta</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($frutas as $chave => $fruta): ?>
        <tr>
          <td><?= $chave ?></td>
          <td><?= $fruta ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>

    <form action="./index.php" method="GET">
      <input type="text" name="filtro" placeholder="Pesquise no array...">
      <button type="submit">Pesquisar</button>
    </form>

    <?php if ($informacao["exibirMensagem"]): ?>
      <p class="<?=$informacao["classe"]?>"><?=$informacao["mensagem"]?></p>
    <?php endif; ?>

  </table>
</body>

</html>