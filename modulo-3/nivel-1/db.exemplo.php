<?php
// Copie este arquivo para db.php e preencha user, senha, host e banco.
// O db.php não vai para o GitHub.

$con = new PDO('pgsql:dbname=exercicios;user=SEU_USUARIO;password=SUA_SENHA;host=127.0.0.1;port=5432');

$con->exec("CREATE TABLE IF NOT EXISTS pessoa (
    id integer PRIMARY KEY,
    nome varchar(50),
    endereco varchar(100),
    bairro varchar(50),
    telefone varchar(20),
    email varchar(50),
    id_cidade integer
)");

$con->exec("CREATE TABLE IF NOT EXISTS cidade (
    id integer PRIMARY KEY,
    nome varchar(50)
)");
