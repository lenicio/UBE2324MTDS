<?php

function adicionarItem($item) {
  array_push($_SESSION["todo"], [
    "id" => uniqid(),
    "titulo" => $item["titulo"],
    "descricao" => $item["descricao"],
    "status" => $item["status"]
  ]);
}
