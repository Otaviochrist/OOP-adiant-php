<?php

$pdo = new PDO("sqlite:" . __DIR__ . "/dados.sqlite");
$pdo->exec("UPDATE pessoa SET nome = 'Ana' WHERE id = 1");
echo "Nome do id um atualizado!";
