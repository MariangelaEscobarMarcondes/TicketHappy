<?php

class EventoModel{
    
    //campos da tabela eventos
    private $id, $evento, $local, $cidade, $categoria, $texto, $data, $horario, $preco, $onde, $imagem, $imagemFundo;
    
    public function __construct($id, $evento, $local, $cidade, $categoria, $texto, $data, $horario, $preco, $onde, $imagem, $imagemFundo){
        $this->id          = $id;
        $this->evento      = $evento;
        $this->local       = $local;
        $this->cidade      = $cidade;
        $this->categoria   = $categoria;
        $this->texto       = $texto;
        $this->data        = $data;
        $this->horario     = $horario;
        $this->preco       = $preco;
        $this->onde        = $onde;
        $this->imagem      = $imagem;
        $thia->imagemFundo = $imagemFundo;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getEvento(){
        return $this->evento;
    }
    
    public function getLocal(){
        return $this->local;
    }
    
    public function getCidade(){
        return $this->cidade;
    }
    
    public function getCategoria(){
        return $this->categoria;
    }
    
    public function getTexto(){
        return $this->texto;
    }
    
    public function getData(){
        return $this->data;
    }
    
    public function getHorario(){
        return $this->horario;
    }
    
    public function getPreco(){
        return $this->preco;
    }
    
    public function getOnde(){
        return $this->onde;
    }
    
    public function getImagem(){
        return $this->imagem;
    }
    
    public function getImagemFundo(){
        return $this->imagemFundo;
    }
    
}

?>