<?php

/*
  Caso idade seja menor que 18 e maior 65, exiba: Alistamento Indisponível.
  Caso idade seja entre 18 e 65, e o genero seja masculino, exiba: Alistamento Obrigatório.
  Caso a idade seja entre 18 e 65, e o genero seja feminino, exiba: Alistamento Opcional.

  Inclua um campo, cujo o usuário possa marcar se já fez o alistamento. 
  Caso tenha marcado, e ele preencha os requisitos do alistamento obrigatório, 
  mostre a mensagem: Reserva Ativa do Brasil!
*/


function ValidaFaixaEtaria($idade) {
  if ($idade < 18 || $idade > 65) {
    return false;
  }

  return true;
}


function ValidaObrigatoriedade($idade, $genero, $ehReserva) {
  $mensagem = "";

  if (!ValidaFaixaEtaria($idade)) {
    $mensagem = "Alistamento Indisponível";
  } elseif (ValidaFaixaEtaria($idade) && $genero == "masculino") {
    if ($ehReserva) {
      $mensagem = "Reserva Ativa do Brasil!";
    } else {
      $mensagem = "Alistamento Obrigatório";
    }
  } elseif (ValidaFaixaEtaria($idade) && $genero = "feminino") {
    $mensagem = "Alistamento Opcional";
  }

  return $mensagem;
}
