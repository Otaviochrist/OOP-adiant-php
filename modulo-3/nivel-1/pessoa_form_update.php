<?php
require_once "db.php";

$id = $_GET['id'];
$linhasEditar = $con->query("SELECT * FROM pessoa WHERE id = $id")->fetch();
?>

<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="form.css">
  <title>Cadastro da pessoa</title>
</head>
<body>
   <form enctype= "multipart/form-data" method="post" action="pessoa_save_update.php">

     <label>Código: </label>
     <input name="id" type="text" readonly="1" value="<?php echo $linhasEditar['id']; ?>">

     <label>Nome: </label>
     <input name="nome" type="text" value="<?php echo $linhasEditar['nome']; ?>">

     <label>Endereço: </label>
     <input name="endereco" type="text" value="<?php echo $linhasEditar['endereco']; ?>">

     <label>Bairro: </label>
     <input name="bairro" type="text" value="<?php echo $linhasEditar['bairro']; ?>">

     <label>Telefone: </label>
     <input name="telefone" type="text" value="<?php echo $linhasEditar['telefone']; ?>">

     <label>E-mail: </label>
     <input name="email" type="text" value="<?php echo $linhasEditar['email']; ?>">

     <label>Cidade: </label>
     <select name="id_cidade">
      <?php
        require_once 'lista_combo_cidades.php';
        print lista_combo_cidades($linhasEditar['id_cidade']);
      ?>
      </select>
     <input type="submit" value="Enviar">
   </form>
</body>
</html>
