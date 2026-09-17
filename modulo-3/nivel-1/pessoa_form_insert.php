<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="form.css">
  <title>Cadastro da pessoa</title>
</head>
<body>
   <form enctype= "multipart/form-data" method="post" action="pessoa_save_insert.php">

     <label>Código: </label>
     <input name="id" type="text" readonly="1">

     <label>Nome: </label>
     <input name="nome" type="text">

     <label>Endereço: </label>
     <input name="endereco" type="text">

     <label>Bairro: </label>
     <input name="bairro" type="text">

     <label>Telefone: </label>
     <input name="telefone" type="text">

     <label>E-mail: </label>
     <input name="email" type="text">

     <label>Cidade: </label>
     <select name="id_cidade">
      <?php
        require_once 'lista_combo_cidades.php';
        print lista_combo_cidades();
      ?>
      </select>
     <input type="submit" value="Enviar">
   </form>
</body>
</html>