<?php

require "./funcoes.php";

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