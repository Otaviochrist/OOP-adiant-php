<?php
require_once '/home/otavio.christ/Documentos/oop-adiant(PHP)/modulo-3/nivel-1/db.php';
if (isset($_GET['action']) && $_GET['action'] == 'reset') {
  $con->exec('DELETE FROM pessoa');
  header('Location: pessoa_list.php');
  exit;
 }
 if (isset($_GET['action']) && $_GET['action'] == 'delete') {
  $id = $_GET['id'];
  $con->exec("DELETE FROM pessoa WHERE id = $id");
  header('Location: pessoa_list.php');
  exit;
 }

$linhasPessoas = $con->query("SELECT id,nome,endereco,email,bairro,telefone,id_cidade FROM pessoa");
$itens = '';
foreach ($linhasPessoas as $pessoa) {
    $item = file_get_contents(__DIR__ . '/html/item.html');
    $item = str_replace('{id_cidade}', $pessoa['id_cidade'], $item);
    $item = str_replace('{id}', $pessoa['id'], $item);
    $item = str_replace('{nome}', $pessoa['nome'], $item);
    $item = str_replace('{endereco}', $pessoa['endereco'], $item);
    $item = str_replace('{email}', $pessoa['email'], $item);
    $item = str_replace('{bairro}', $pessoa['bairro'], $item);
    $item = str_replace('{telefone}', $pessoa['telefone'], $item);
    $itens .= $item;
}
$list = file_get_contents(__DIR__ . '/html/list.html');
$list = str_replace('{itens}', $itens, $list);
print $list;