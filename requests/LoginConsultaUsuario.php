<?php

require_once '../db/Database.class.php';
require_once '../db/User.class.php';

$nome = $_POST["login-nome"];
$senha = $_POST['login-senha'];

$user = new User(null, $nome, $senha, null);
$result = $user->verificaLogin($nome, $senha);

if ($result == true) {
    echo "<script>
        window.location.href = '../home.php';
    </script>";
} else {
    echo "<script>
        alert('Usuário não encontrado ou senha inválida!');
        window.location.href = '../index.html';
    </script>";
}

?>