<?php

include "save.php";

$dados = save::ListarTodos();
$json = json_encode($dados);
header("Content-Type: application/json; charset=UTF-8");
echo $json;
