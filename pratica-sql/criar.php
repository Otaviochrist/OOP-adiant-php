<?php
$pdo = new PDO("sqlite:" . __DIR__ . "/dados.sqlite");
$pdo->exec("CREATE TABLE IF NOT EXISTS pessoa (
 id INTEGER PRIMARY KEY AUTOINCREMENT,
 nome TEXT
)");
echo "Lista criada!";
