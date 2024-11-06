<?php 

function CalculaImposto($salario) {
  
  $imposto = 0;
  
  if ($salario > 4000) {
    $imposto += ($salario - 4000) * 0.18;
    $salario = 4000;
  }

  if ($salario > 3000) {
    $imposto += ($salario - 3000) * 0.12;
    $salario = 3000;
  }
  
  if ($salario > 2000) {
    $imposto += ($salario - 2000) * 0.06;
  }

  return number_format($imposto, 2);
}