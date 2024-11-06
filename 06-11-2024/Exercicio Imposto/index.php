<?php
require "./imposto.php";
require "./validacoes.php";

$requisitos = ["salario"];

if (validaInput($_GET, $requisitos)) {
  $imposto = CalculaImposto($_GET["salario"]);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Olá, mundo!</title>
</head>

<body>



  <div id="myModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Valor do imposto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>O valor do seu imposto é: R$ <?= $imposto ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">OK</button>
        </div>
      </div>
    </div>
  </div>



  <form class="form-inline justify-content-center" style="margin-top: 50px !important;" action="./index.php" method="get">

    <div class="form-group mx-sm-3 mb-2">
      <label for="salario" class="sr-only">Salário</label>
      <input type="number" class="form-control" id="salario" name="salario" placeholder="Salário">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Calcular Imposto</button>
  </form>





  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <?php if (isset($imposto)): ?>
    <script>
      $('#myModal').modal('show');
    </script>
  <?php endif ?>
</body>

</html>