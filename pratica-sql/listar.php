<?php
$pdo = new PDO("sqlite:" . __DIR__ . "/dados.sqlite");
$linhas = $pdo->query("SELECT id, nome FROM pessoa");
  foreach($linhas as $linha){
    echo"{$linha["id"]} - {$linha["nome"]} \n";
  }
