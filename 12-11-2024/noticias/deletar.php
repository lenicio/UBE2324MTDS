<?php

require "./funcoes.php";

# Deletar notícia
if (isset($_GET["excluir"]) && !empty($_GET["excluir"])) {
  $id = $_GET["excluir"];

  ExcluirNoticia($id);
  header("Location: ./index.php");
  exit;
}