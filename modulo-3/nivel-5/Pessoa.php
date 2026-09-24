<?php

class pessoa {

  public static function getPessoa($id) {
    global $con;
    return $con->query("SELECT * FROM pessoa WHERE id = $id")->fetch();
  }

  public static function getLinhas(){
   global $con;
   return $con->query("SELECT id,nome,endereco,email,bairro,telefone,id_cidade FROM pessoa");
  }

  Public static function inserirCadastros($dados){
  global $con;
  $linha = $con->query("SELECT MAX(id) AS maior FROM pessoa")->fetch();
  $next = (int) $linha["maior"] + 1;
  $con->exec("INSERT INTO pessoa (id,nome, endereco, bairro, email,telefone, id_cidade) VALUES ($next, '{$dados['nome']}', '{$dados['endereco']}', '{$dados['bairro']}', '{$dados['email']}', '{$dados['telefone']}' , '{$dados['id_cidade']}' )");
  }

  public static function atualizacaoCadastro($dados){
  global $con;
  $con->exec("UPDATE pessoa SET nome = '{$dados['nome']}', endereco = '{$dados['endereco']}', bairro = '{$dados['bairro']}', email = '{$dados['email']}', telefone = '{$dados['telefone']}', id_cidade = '{$dados['id_cidade']}' WHERE id = {$dados['id']}");
  }

  public static function resetTabela(){
  global $con;
  $con->exec('DELETE FROM pessoa');
}

  public static function resetpessoa($id){
  global $con;
  $con->exec("DELETE FROM pessoa WHERE id = $id");
}
}