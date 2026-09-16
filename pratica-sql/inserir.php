<?php
$pdo = new PDO("sqlite:" . __DIR__ . "/dados.sqlite");
$pdo->exec("INSERT INTO pessoa (nome) VALUES ('pedro')");
echo "Nome inserido!";