<?php

include_once 'Database.class.php';

class User
{
    public $id;
    public $nome;
    public $senha;
    public $email;
    public $conn;
        
   // constructor
    function __construct($id, $nome, $senha, $email) {
         $this->id = $id;
         $this->nome = $nome;
         $this->senha = $senha;
         $this->email = $email;
    }

    // destructor
    function __destruct() {
         
    }
    
    // verifica validade de usar e senha para login
    public function verificaLogin($email, $senha) {
        $conn = Database::conexao();
        $sql = "SELECT * FROM Usuarios WHERE email = '$email' AND senha = '$senha'";
        $result = $conn->query($sql);
        if ($result->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

}