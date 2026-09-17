<?php
$pdo = new PDO("sqlite:" . __DIR__ . "/dados.sqlite");
$pdo->exec("DELETE FROM pessoa WHERE id = 1");
echo "Item Excluido!";
