<?php


class pessoa {
  private static $conn;
  public static function getConnection() {
    if (empty(self::$conn)) {
        $ini = parse_ini_file(__DIR__ . '/config/livro.ini');
        $host = $ini['host'];
        $name = $ini['name'];
        $user = $ini['user'];
        $pass = $ini['pass'];
        self::$conn = new PDO("pgsql:dbname={$name};user={$user};password={$pass};host={$host};port=5432");
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    return self::$conn;
}

  public static function getPessoa($id) {

    $con = self::getConnection();
    $resultado = $con->prepare("SELECT * FROM pessoa WHERE id = :id");
    $resultado->execute([':id' => $id]);
    return $resultado->fetch();
  }

  public static function getLinhas(){
    $con = self::getConnection();
   return $con->query("SELECT id,nome,endereco,email,bairro,telefone,id_cidade FROM pessoa");
  }

  Public static function inserirCadastros($dados){
  $con = self::getConnection();
  $linha = $con->query("SELECT MAX(id) AS maior FROM pessoa")->fetch();
  $next = (int) $linha["maior"] + 1;
  $resultado = $con->prepare("INSERT INTO pessoa (id, nome, endereco, bairro, email, telefone, id_cidade) VALUES (:id, :nome, :endereco, :bairro, :email, :telefone, :id_cidade)");
  $resultado->execute([':id' => $next, ':nome' => $dados['nome'], ':endereco' => $dados['endereco'], ':bairro' => $dados['bairro'],':email' => $dados['email'], ':telefone' => $dados['telefone'], ':id_cidade' => $dados['id_cidade']]);


  }

  public static function atualizacaoCadastro($dados){
  $con = self::getConnection();
  $resultado= $con->prepare("UPDATE pessoa SET nome = :nome, endereco = :endereco, bairro = :bairro, email = :email, telefone = :telefone, id_cidade = :id_cidade WHERE id = :id");
  $resultado->execute([':nome' => $dados['nome'], ':endereco' => $dados['endereco'], ':bairro' => $dados['bairro'],':email' => $dados['email'], ':telefone' => $dados['telefone'], ':id_cidade' => $dados['id_cidade'] ,':id' => $dados['id']]);
  }

  public static function resetTabela(){
  $con = self::getConnection();
  $con->exec('DELETE FROM pessoa');
}

  public static function resetpessoa($id){
  $con = self::getConnection();
  $resultado=$con->prepare("DELETE FROM pessoa WHERE id = :id");
  $resultado->execute([':id' => $id]);
  }
}