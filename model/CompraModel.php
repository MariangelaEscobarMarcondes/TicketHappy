<?php

class CompraModel{
    
    //campos da tabela eventos
    private $id, $nome, $preco, $imagem;
    
    public function __construct($id, $nome, $preco, $imagem){
        $this->id          = $id;
        $this->nome        = $nome;
        $this->preco       = $preco;
        $this->imagem      = $imagem;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getPreco(){
        return $this->preco;
    }
    
    public function getImagem(){
        return $this->imagem;
    }
    
}

?>