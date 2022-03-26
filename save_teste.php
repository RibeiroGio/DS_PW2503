<?php
include "save.php";

$novoCadastro = new save(1, 1-1, 0); //1 = id, 1-1 = fase, 0 = item (no bit 0 é igual a FALSE)
$novoCadastro->Cadastrar();

$dados = save::ListarTodos();
var_dump($dados);