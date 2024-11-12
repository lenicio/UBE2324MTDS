<?php
require "./funcoes.php";

$noticias = ListarNoticia();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Noticias</title>
  <link rel="stylesheet" href="./../styles/style.css">
</head>

<body>

  <h1>Adicionar Notícia</h1>
  <form action="./adicionar.php" method="GET">
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" id="titulo">

    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao" rows="5" cols="30"></textarea>

    <button type="submit">Adicionar Notícia</button>
  </form>

  <hr>

  <?php foreach ($noticias as $noticia): ?>
    <div class="noticia">
      <h1><?= $noticia["titulo"] ?></h1>
      <p><?= $noticia["descricao"] ?></p>
      <span class="data"><?= date("d/m/Y h:i", strtotime($noticia["data_criacao"])) ?></span>
      <a href="./deletar.php?excluir=<?= $noticia['id'] ?>">[Excluir]</a>
    </div>
  <?php endforeach ?>

</body>

</html>