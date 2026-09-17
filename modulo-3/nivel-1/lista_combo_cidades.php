<?php
require_once 'db.php';

  // $con->exec("INSERT INTO cidade (id,nome) VALUES (1,'Porto Alegre')");
  // $con->exec("INSERT INTO cidade (id,nome) VALUES (2,'Caxias do Sul')");
  // $con->exec("INSERT INTO cidade (id,nome) VALUES (3,'Pelotas')");

  function lista_combo_cidades(){
    global $con;
    $linhas = $con->query("SELECT id, nome FROM cidade");
    $html='';
      foreach($linhas as $linha){
        $html .= "<option value='{$linha['id']}'>{$linha['nome']}</option>";
      }
    return $html;
  }




