<?php
require_once 'db.php';

$id = $_GET['id'];
$con->exec("DELETE FROM pessoa WHERE id = $id");
header('Location: pessoa_list.php');
exit;
