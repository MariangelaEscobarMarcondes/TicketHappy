<?php

class LoginModel{
    
    //campos da tabela cadastro
    private $id, $email, $senha;
    
    public function __construct($id, $email, $senha){
        $this->id = $id;
        $this->email = $email;
        $this->senha = $senha;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getSenha(){
        return $this->senha;
    }
    
    
    
}

?>