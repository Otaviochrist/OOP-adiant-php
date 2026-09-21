<?php
// 3.1.2 — recebe o POST da edição e grava (UPDATE, não INSERT).
// require_once db.php
// $dados = $_POST
// UPDATE pessoa SET nome=..., endereco=..., bairro=..., telefone=..., email=..., id_cidade=...
// WHERE id = ...  (sem WHERE apaga/muda todo mundo)
// Depois volta para pessoa_list.php

require_once "db.php";
$dados = $_POST;
$con->exec("UPDATE pessoa SET nome = '{$dados['nome']}', endereco = '{$dados['endereco']}', bairro = '{$dados['bairro']}', email = '{$dados['email']}', telefone = '{$dados['telefone']}', id_cidade = '{$dados['id_cidade']}' WHERE id = {$dados['id']}");
header('Location: pessoa_list.php');
exit;
