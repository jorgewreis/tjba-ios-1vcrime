// create class User with 4 properties
<?php

class User
{
    public $id;
    public $nome;
    public $senha;
    public $email;
    
    // constructor
    public function __construct($id, $nome, $senha, $email)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->senha = $senha;
        $this->email = $email;
    }
    
    // destructor
    public function __destruct()
    {
        
    }

    // getters
    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    // setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->$email = $email;
    }

    // toString
    public function __toString()
    {
        return "Id: " . $this->id . " Nome: " . $this->nome . " Senha: " . $this->senha . " Email: " . $this->email;
    }

    // methods
    public function insert()
    {
        $db = Database::conexao();
        
        $sql = "INSERT INTO usuario (nome, senha, email) VALUES ('$this->nome', '$this->senha', '$this->email')";
        
        $db->query($sql);
        
        $db->close();
    }

    public function update()
    {
        $db = Database::conexao();
        
        $sql = "UPDATE usuario SET nome = '$this->nome', senha = '$this->senha', email = '$this->email' WHERE id = '$this->id'";
        
        $db->query($sql);
        
        $db->close();
    }

    public function delete()
    {
        $db = Database::conexao();
        
        $sql = "DELETE FROM usuario WHERE id = '$this->id'";
        
        $db->query($sql);
        
        $db->close();
    }

    public static function selectAll()
    {
        $db = Database::conexao();
        
        $sql = "SELECT * FROM usuario";
        
        $result = $db->query($sql);
        
        $db->close();
        
        return $result;
    }

    public static function select($id)
    {
        $db = Database::conexao();
        
        $sql = "SELECT * FROM usuario WHERE id = '$id'";
        
        $result = $db->query($sql);
        
        $db->close();
        
        return $result;
    }

    public static function selectByName($nome)
    {
        $db = Database::conexao();
        
        $sql = "SELECT * FROM usuario WHERE nome = '$nome'";
        
        $result = $db->query($sql);
        
        $db->close();
        
        return $result;
    }

    public static function selectByEmail($email)
    {
        $db = Database::conexao();
        
        $sql = "SELECT * FROM usuario WHERE email = '$email'";
        
        $result = $db->query($sql);
        
        $db->close();
        
        return $result;
    }

    // exclude user by id
    public static function deleteById($id)
    {
        $db = Database::conexao();
        
        $sql = "DELETE FROM usuario WHERE id = '$id'";
        
        $db->query($sql);
        
        $db->close();
    }

    //show number users
    public static function count()
    {
        $db = Database::conexao();
        
        $sql = "SELECT COUNT(*) FROM usuario";
        
        $result = $db->query($sql);
        
        $db->close();
        
        return $result;
    }
}