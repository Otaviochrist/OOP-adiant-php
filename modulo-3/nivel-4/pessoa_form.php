<?php
require_once '/home/otavio.christ/Documentos/oop-adiant(PHP)/modulo-3/nivel-1/db.php';
require_once __DIR__ . '/funcoes.php';
if (isset($_POST['nome'])){
  $dados = $_POST;
  if (empty($dados['id'])){
    inserirCadastros($dados);
  } else {
    atualizacaoCadastro($dados);
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
  $linha = getPessoa($id);
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
