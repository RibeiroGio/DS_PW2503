<?php

include "usuario.php";

$novoCadastro = new usuario( 1, 'Giovanna');
$novoCadastro->Cadastrar();

$dados = usuario::ListarTodos();
var_dump($dados);