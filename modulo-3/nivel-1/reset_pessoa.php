<?php
require_once 'db.php';

$con->exec('DELETE FROM pessoa');
echo 'Pessoas apagadas. Apague este arquivo (reset_pessoa.php) depois.';
