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

  if (isset($_GET['id'])){
    $id = $_GET['id'];
    $linha = $con->query("SELECT * FROM pessoa WHERE id = $id")->fetch();
  }
?>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="form.css">
  <title>Cadastro da pessoa</title>
</head>
<body>
   <form enctype= "multipart/form-data" method="post" action="pessoa_form.php">

     <label>Código: </label>
     <input name="id" type="text" readonly="1"  value="<?php if (isset($linha)){
    echo $linha['id'];} ?>">

     <label>Nome: </label>
     <input name="nome" type="text" value="<?php if (isset($linha)){
    echo $linha['nome'];} ?>">

     <label>Endereço: </label>
     <input name="endereco" type="text" value="<?php if (isset($linha)){
    echo $linha['endereco'];} ?>">

     <label>Bairro: </label>
     <input name="bairro" type="text" value="<?php if (isset($linha)){
    echo $linha['bairro'];} ?>">

     <label>Telefone: </label>
     <input name="telefone" type="text" value="<?php if (isset($linha)){
    echo $linha['telefone'];} ?>">

     <label>E-mail: </label>
     <input name="email" type="text" value="<?php if (isset($linha)){
    echo $linha['email'];} ?>">

     <label>Cidade: </label>
     <select name="id_cidade">
      <?php
        require_once '/home/otavio.christ/Documentos/oop-adiant(PHP)/modulo-3/nivel-1/lista_combo_cidades.php';
        print lista_combo_cidades($linha['id_cidade'] ?? null);
      ?>
      </select>
     <input type="submit" value="Enviar">
   </form>
</body>
</html>
