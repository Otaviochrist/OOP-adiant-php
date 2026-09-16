<?php
// 3) SELECT id e nome. Percorra com foreach e dê echo em cada linha.
// php pratica-sql/listar.php
// esperado: 1 - Maria   (os ids e nomes que existirem no banco)

$pdo = new PDO("sqlite:" . __DIR__ . "/dados.sqlite");
$linhas = $pdo->query("SELECT id, nome FROM pessoa");
  foreach($linhas as $linha){
    echo"{$linha["id"]} - {$linha["nome"]} \n";
  }
