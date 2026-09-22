<?php
 require_once "/home/otavio.christ/Documentos/oop-adiant(PHP)/modulo-3/nivel-1/db.php";
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

$linhasPessoas = $con->query("SELECT id,nome,endereco,email,telefone,id_cidade FROM pessoa");
echo "<link rel='stylesheet' href='list.css'>";
echo "<table>";
echo "<tr> <th>Id</th> <th>Nome</th> <th>endereço</th> <th>email</th> <th>telefone</th> <th>ID da cidade</th> <th>Editar</th> <th>Excluir</th></tr>";
foreach ($linhasPessoas as $linhaPessoa) {
    echo "<tr><td>{$linhaPessoa['id']}</td> <td>{$linhaPessoa['nome']}</td> <td>{$linhaPessoa['endereco']}</td> <td>{$linhaPessoa['email']}</td> <td>{$linhaPessoa['telefone']}</td> <td>{$linhaPessoa['id_cidade']}</td> <td><a href='pessoa_form.php?id={$linhaPessoa['id']}'>Editar</a></td> <td><a class='excluir' href='pessoa_list.php?action=delete&id={$linhaPessoa['id']}'>Excluir</a></td></tr>";
}
echo "</table>";
echo "<a class='botao' href='pessoa_form.php'>Inserir</a>";
echo "<a class='botao' href='pessoa_list.php?action=reset'>Zerar testes</a>";