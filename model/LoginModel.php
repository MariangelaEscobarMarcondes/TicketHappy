<?php

class LoginModel{
    
    //campos da tabela cadastro
    private $id, $email, $nome, $senhaHash;
    
    public function __construct($id, $email, $nome, $senhaHash){
        $this->id = $id;
        $this->email = $email;
        $this->nome = $nome;
        $this->senhaHash = $senhaHash;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getSenhaHash(){
        return $this->senhaHash;
    }
    
    
    
}

?>