<?php

require __DIR__ . "/../config.php";

$descricao = $_GET["descricao"];
$categoriaId = $_GET["categoria"];
$valor = $_GET["valor"];
$status = $_GET["status"];
$data = $_GET["data"];
$parcela = $_GET["parcela"];


$sql = "insert into despesas (descricao, categoria_id) values (:descricao, :categoria_id)";
$sql = $pdo->prepare($sql);
$sql->bindValue(":descricao", $descricao);
$sql->bindValue(":categoria_id", $categoriaId);
$sql->execute();

$despesaId = $pdo->lastInsertId();



$sql = "insert into despesas_parcela (valor, data, status, despesa_id) values(:valor, :data, :status, :despesa_id)";
$sql = $pdo->prepare($sql);
$sql->bindValue(":valor", $valor);
$sql->bindValue(":data", $data);
$sql->bindValue(":status", $status);
$sql->bindValue(":despesa_id", $despesaId);
$sql->execute();

header("Location: ./index.php");
exit;


// $data = $_GET["data"];

// $data = new DateTime($data);

// $data->modify("+1 month");
// echo $data->format("Y-m-d");