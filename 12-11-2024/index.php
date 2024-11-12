<?php
require "./noticias.php";
require "./config.php";

# Adicionar notícia
if (
  isset($_GET["titulo"]) && !empty($_GET["titulo"]) &&
  isset($_GET["descricao"]) && !empty($_GET["descricao"])
) {

  $titulo = $_GET["titulo"];
  $descricao = $_GET["descricao"];

  AdicionarNoticia($titulo, $descricao);
  header("Location: ./index.php");
  exit;
}


# Deletar notícia
if (isset($_GET["excluir"]) && !empty($_GET["excluir"])) {
  $id = $_GET["excluir"];

  ExcluirNoticia($id);
  header("Location: ./index.php");
  exit;
}

$noticias = ListarNoticia();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Noticias</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <h1>Adicionar Notícia</h1>
  <form action="./index.php" method="GET">
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
      <a href="./index.php?excluir=<?= $noticia['id'] ?>">[Excluir]</a>
    </div>
  <?php endforeach ?>

</body>

</html>