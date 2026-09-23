<?php
require_once '/home/otavio.christ/Documentos/oop-adiant(PHP)/modulo-3/nivel-1/db.php';
if (isset($_POST['nome'])){
  $dados = $_POST;
  if (empty($dados['id'])){
    $linha = $con->query("SELECT MAX(id) AS maior FROM pessoa")->fetch();
    $next = (int) $linha["maior"] + 1;
    $con->exec("INSERT INTO pessoa (id,nome, endereco, bairro, email,telefone, id_cidade) VALUES ($next, '{$dados['nome']}', '{$dados['endereco']}', '{$dados['bairro']}', '{$dados['email']}', '{$dados['telefone']}' , '{$dados['id_cidade']}' )");
  } else {
    $con->exec("UPDATE pessoa SET nome = '{$dados['nome']}', endereco = '{$dados['endereco']}', bairro = '{$dados['bairro']}', email = '{$dados['email']}', telefone = '{$dados['telefone']}', id_cidade = '{$dados['id_cidade']}' WHERE id = {$dados['id']}");
  }
    header('Location: pessoa_list.php');
    exit;
}

$pessoa = [
    'id' => '',
    'nome' => '',
    'endereco' => '',
    'bairro' => '',
    'telefone' => '',
    'email' => '',
    'id_cidade' => '',
];


if (isset($_GET['id'])){
  $id = $_GET['id'];
  $linha = $con->query("SELECT * FROM pessoa WHERE id = $id")->fetch();
  if ($linha) {
        $pessoa = $linha;
    }
}

require_once '/home/otavio.christ/Documentos/oop-adiant(PHP)/modulo-3/nivel-1/lista_combo_cidades.php';
$form = file_get_contents(__DIR__ . '/html/form.html');
$form = str_replace('{id}', $pessoa['id'], $form);
$form = str_replace('{nome}', $pessoa['nome'], $form);
$form = str_replace('{endereco}', $pessoa['endereco'], $form);
$form = str_replace('{bairro}', $pessoa['bairro'], $form);
$form = str_replace('{telefone}', $pessoa['telefone'], $form);
$form = str_replace('{email}', $pessoa['email'], $form);
$form = str_replace('{cidades}', lista_combo_cidades($pessoa['id_cidade'] ?: null), $form);
print $form;
