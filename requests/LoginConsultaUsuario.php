<?php

require_once '../db/Database.class.php';

$nome = $_POST["login-nome"];
$senha = $_POST['login-senha'];

$db = Database::conexao();

$sql = "SELECT * FROM usuario WHERE nome = '$nome' AND senha = '$senha'";

$result = $db->query($sql);

// open home.php if user exists
if ($result->num_rows > 0) {
    echo "<script>
        window.location.href = '../home.php';
    </script>";
} else {
    echo "<script>
        alert('Usuário não encontrado!');
        window.location.href = '../index.php';
    </script>";
}

$db->close();

?>