<?php
 

class PagamentoModel{
    
    //campos da tabela pagamento
    private $id, $credito, $nome_titular, $validade, $seguranca, $bandeira;
    
    public function __construct( $id, $credito, $nome_titular, $validade, $seguranca, $bandeira){
        $this->id                    = $id;
        $this->credito               = $credito;
        $this->nome_titular          = $nome_titular;
        $this->validade              = $validade;
        $this->seguranca             = $seguranca;
        $this->bandeira              = $bandeira;
    }

    public function getId(){
        return $this->id;
    }
    
    public function getCredito(){
        return $this->credito;
    }
    
    public function getNome_titular(){
        return $this->nome_titular;
    }
    
    public function getValidade(){
        return $this->validade;
    }
    
    public function getSeguranca(){
        return $this->seguranca;
    }
    
    public function getBandeira(){
        return $this->bandeira;
    }
    
}
?>