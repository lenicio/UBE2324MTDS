<?php

function MaiorDeIdade($idade) {
  $ret = "";
  if ($idade >= 18) {
    $ret = "Maior de idade";
  } else {
    $ret = "Menor de idade";
  }

  return $ret;
}


function validaInput($parametros, $requisitos) {

  $ret = true;

  foreach ($requisitos as $req) {
   if (!isset($parametros[$req]) || empty($parametros[$req])) {
      $ret = false;
   }
  }

  return $ret;
}