<?php

class CadastroModel{
    
    //campos da tabela eventos
    private $id, 
            $nome, 
            $email,
            $cpf,
            $dataNascimento, 
            $telefone,
            $celular, 
            $sexo, 
            $endereco,
            $numero,
            $apartamento,
            $bairro,
            $cidade, 
            $estado,
            $cep,
            $senha;
                                   
    
    public function __construct($id, $nome, $email, $cpf, $dataNascimento, $telefone,
                                $celular, $sexo, $endereco, $numero, $apartamento,
                                $bairro, $cidade, $estado, $cep, $senha)
    {
        $this->id           = $id;
        $this->nome         = $nome;
        $this->email        = $email;
        $this->cpf          = $cpf;
        $this->dataNasc     = $dataNascimento;
        $this->telefone     = $telefone;
        $this->celular      = $celular;
        $this->sexo         = $sexo;
        $this->endereco     = $endereco;
        $this->numero       = $numero;
        $this->apartamento  = $apartamento;
        $this->bairro       = $bairro;
        $this->cidade       = $cidade;
        $this->estado       = $estado;
        $this->cep          = $cep;
        $this->senha        = $senha;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getCpf(){
        return $this->cpf;
    }
    
    public function getDataNasc(){
        return $this->dataNasc;
    }
      
    public function getTelefone(){
        return $this->telefone;
    }
    
    public function getCelular(){
        return $this->celular;
    }
    
    public function getSexo(){
        return $this->sexo;
    }
    
    public function getEndereco(){
        return $this->endereco;
    }
   
    public function getNumero(){
        return $this->numero;
    }
    
    public function getApartamento(){
        return $this->apartamento;
    }
    
    public function getBairro(){
        return $this->bairro;
    }
    
    public function getCidade(){
        return $this->cidade;
    }
    
    public function getEstado(){
        return $this->estado;
    }
    
    public function getCep(){
        return $this->cep;
    }
    
    public function getSenha(){
        return $this->senha;
    }
   
}

?>