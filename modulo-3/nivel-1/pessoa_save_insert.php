<?php
require_once 'db.php';

$dados = $_POST;
echo $dados['nome'] . "<br>";
echo $dados['endereco'] . "<br>";
echo $dados['bairro'] . "<br>";
echo $dados['email'] . "<br>";
echo $dados['telefone'] . "<br>";
echo $dados['id_cidade'] . "<br>";

$linha = $con->query("SELECT MAX(id) AS maior FROM pessoa")->fetch();
$next = (int) $linha["maior"] + 1;
echo $next;

$con->exec("INSERT INTO pessoa (id,nome, endereco, bairro, email,telefone, id_cidade) VALUES ($next, '{$dados['nome']}', '{$dados['endereco']}', '{$dados['bairro']}', '{$dados['email']}', '{$dados['telefone']}' , '{$dados['id_cidade']}' )");
echo "<br> Gravou tudo!";



