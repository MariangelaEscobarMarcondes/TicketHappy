<?php

class EventoModel{
    
    //campos da tabela eventos
    private $id, $evento, $valor, $quantidade, $categoria;
    
    public function __construct($id, $evento, $valor, $quantidade, $categoria){
        $this->id         = $id;
        $this->evento     = $evento;
        $this->valor      = $valor;
        $this->quantidade = $quantidade;
        $this->categoria  = $categoria;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getEvento(){
        return $this->evento;
    }
    
    public function getValor(){
        return $this->valor;
    }
    
    public function getQuantidade(){
        return $this->quantidade;
    }
    
    public function getCategoria(){
        return $this->categoria;
    }
    
   
   
}

?>