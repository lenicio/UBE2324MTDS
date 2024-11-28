<?php

require __DIR__ . "/../config.php";

$descricao = $_GET["descricao"];
$categoriaId = $_GET["categoria"];
$valor = $_GET["valor"];
$status = $_GET["status"];
$data = $_GET["data"];
$parcela = $_GET["parcela"];
$data = $_GET["data"];


$data = new DateTime($data);
$valor = floatval($valor) / floatval($parcela);

$sql = "insert into despesas (categoria_id) values (:categoria_id)";
$sql = $pdo->prepare($sql);
$sql->bindValue(":categoria_id", $categoriaId);
$sql->execute();

$despesaId = $pdo->lastInsertId();


for ($cont = 1; $cont <= $parcela; $cont++) {
    $sql = "insert into despesas_parcela (descricao, valor, data, status, despesa_id) values(:descricao, :valor, :data, :status, :despesa_id)";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":descricao", $descricao . "($cont / $parcela)");
    $sql->bindValue(":valor", $valor);
    $sql->bindValue(":data", $data->format("Y-m-d"));
    $sql->bindValue(":status", $status);
    $sql->bindValue(":despesa_id", $despesaId);
    $sql->execute();
    $data->modify("+1 month");
}




header("Location: ./index.php");
exit;
