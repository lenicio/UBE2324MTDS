<?php

require __DIR__ . "/../config.php";

$sql = "select 
            d.id as despesa_id,
            dp.id as despesa_parcela_id,
            dp.valor,
            dp.status,
            d.descricao as despesa_descricao,
            dp.data,
            cd.descricao as categoria_descricao
        from 
            despesas_parcela dp
            join despesas d on dp.despesa_id = d.id
            join categorias_despesa cd on d.categoria_id = cd.id
        order by 
            dp.data desc";

$sql = $pdo->prepare($sql);
$sql->execute();
$despesas = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = "select * from categorias_despesa order by descricao";
$sql = $pdo->prepare($sql);
$sql->execute();
$categorias = $sql->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>Despesas</h1>
    <h2>Adicionar Despesa</h2>
    <form action="./despesas/adicionar.php" method="get">
        <div>
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="descricao">
        </div>

        <div>
            <label for="valor">Valor:</label>
            <input type="number" name="valor" id="valor">
        </div>

        <div>
            <label for="parcela">Quantidade de parcela</label>
            <input type="number" name="parcela" id="parcela" value="1">
        </div>

        <div>
            <label for="categoria">Categoria: </label>
            <select name="categoria" id="categoria">
                <?php foreach($categorias as $categoria): ?>
                    <option value="<?=$categoria["id"]?>"><?=$categoria["descricao"]?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div>
            <label for="data">Data de vencimento:</label>
            <input type="date" name="data" id="data">
        </div>

        <div>
            <label for="status">Status:</label>
            <select name="status" id="status">
                <option value="Pendente">Pendente</option>
                <option value="Pago">Pago</option>
            </select>
        </div>

        <div>
            <button type="submit">Cadastrar Despesa</button>
        </div>
    </form>
    <table>
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Valor</th>
                <th>Data</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($despesas as $despesa): ?>
                <tr>
                    <td><?= $despesa["despesa_descricao"] ?></td>
                    <td><?= $despesa["categoria_descricao"] ?></td>
                    <td><?= $despesa["valor"] ?></td>
                    <td><?= $despesa["data"] ?></td>
                    <td><?= $despesa["status"] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>