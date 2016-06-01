<?php

class ContatoModel{
    
    //campos da tabela eventos
    private $id, $nomeCompleto, $email, $assunto, $mensagem;
    
    public function __construct($id, $nomeCompleto, $email, $assunto, $mensagem){
        $this->id           = $id;
        $this->nomeCompleto = $nomeCompleto;
        $this->email        = $email;
        $this->assunto      = $assunto;
        $this->mensagem     = $mensagem;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getNomeCompleto(){
        return $this->nomeCompleto;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getAssunto(){
        return $this->assunto;
    }
    
    public function getMensagem(){
        return $this->mensagem;
    }
    
   
}

?>