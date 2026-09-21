<?php
require_once 'db.php';

$linhasPessoas = $con->query("SELECT id,nome,endereco,email,telefone,id_cidade FROM pessoa");
echo "<link rel='stylesheet' href='list.css'>";
echo "<table>";
echo "<tr> <th>Id</th> <th>Nome</th> <th>endereço</th> <th>email</th> <th>telefone</th> <th>ID da cidade</th> <th>Editar</th> <th>Excluir</th></tr>";
foreach ($linhasPessoas as $linhaPessoa) {
    echo "<tr><td>{$linhaPessoa['id']}</td> <td>{$linhaPessoa['nome']}</td> <td>{$linhaPessoa['endereco']}</td> <td>{$linhaPessoa['email']}</td> <td>{$linhaPessoa['telefone']}</td> <td>{$linhaPessoa['id_cidade']}</td> <td><a href='pessoa_form_update.php?id={$linhaPessoa['id']}'>Editar</a></td> <td><a class='excluir' href='pessoa_delete.php?id={$linhaPessoa['id']}'>Excluir</a></td></tr>";
}
echo "</table>";
echo "<a class='botao' href='pessoa_form_insert.php'>Inserir</a>";
echo "<a class='botao' href='reset_pessoa.php'>Zerar testes</a>";