<?php

$data = "2024-01-29";
$data = new DateTime($data);

for ($cont = 1; $cont <= 20; $cont++) {
    $data->modify("+1 month");
    echo $data->format("d/m/Y") . "<br>";   
}