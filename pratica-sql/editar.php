<?php
// 4) UPDATE: troque o nome de UM id (WHERE). Liste antes para ver o número.
// php pratica-sql/editar.php

$pdo = new PDO("sqlite:" . __DIR__ . "/dados.sqlite");
$pdo->exec("UPDATE pessoa SET nome = 'Ana' WHERE id = 1");
echo "Nome do id um atualizado!";
