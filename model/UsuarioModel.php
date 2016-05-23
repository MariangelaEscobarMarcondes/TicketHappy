<?php

class UsuarioModel{
    //campos da tabela cadastro
    private $id, $nome, $login, $senha;
    
    public function __construct($id, $nome, $login, $senha){
        $this->id = $id;
        $this->nome = $nome;
        $this->login = $login;
        $this->senha = $senha;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getLogin(){
        return $this->login;
    }
    
    public function getSenha(){
        return $this->senha;
    }
    
    
    
}

?>