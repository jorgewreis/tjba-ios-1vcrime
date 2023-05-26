<?php

require_once '../db/Database.class.php';

$nome = $_POST["login-nome"];
$senha = $_POST['login-senha'];

$db = Database::conexao();

?>