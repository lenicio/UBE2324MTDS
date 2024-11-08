<?php 

/*
- Até 2.000                   - isento
- Entre 2.000,01 até 3.000,00 - 6% 
- Entre 3.000,01 até 4.000,00 - 12%
- Acima de 4.000,00           - 18% 
*/

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