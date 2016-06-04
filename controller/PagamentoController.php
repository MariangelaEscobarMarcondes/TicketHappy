<?php

class PagamentoController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
   
    public function cadastroPagamento(){
       $this->view->renderizar("header");
        $this->view->renderizar("pagamento");
        $this->view->renderizar('footer');
    }
    // https://ticket-happy-mariangela.c9users.io/pagamento/cadastroPagamento
    
    
    //esta fazendo um redirect
    public function sucesso(){
       $this->view->renderizar("header");
       $this->view->renderizar("sucesso"); 
       $this->view->renderizar("footer"); 
    }
    
    public function inserir(){
        
        //Obtem da view
        $credito               = $_POST["credito"];
        $nome_titular          = $_POST["nome_titular"];
        $validade              = $_POST["validade"];
        $seguranca             = $_POST["seguranca"];
        $bandeira              = $_POST["bandeira"];
        
        
        
        //passa para o EventoModel
        $pagamento = new PagamentoModel(0,  $credito, $nome_titular, $validade, $seguranca, $bandeira);
        $pagamentoDao = new PagamentoDAO();
        
        //PASSA AO DAO
         $ret = $pagamentoDao->insert($pagamento);
        
        if($ret === ""){
            header("Location: /pagamento/sucesso");    
        }else{
            $this->view->interpolar("erroSql",$ret);
        } 
    }
    // chama o controller eventoController e o formulario ==> vai chamar essa funcao quando clicar no botao
    // https://ticket-happy-mariangela.c9users.io/pagamento/inserir  
    
    
     public function listar(){
        
        $pagamentoDao = new PagamentoDAO();
        
        $todosPagamentos = $pagamentoDao->getPagamento();
        
        $this->view->renderizar("header");
        
        $this->view->interpolar("listar_pagamento",$todosPagamentos);
        
        $this->view->renderizar("footer");
    }
    //https://ticket-happy-mariangela.c9users.io/pagamento/listar

    
    public function deletar(){
        $id = $_GET["arg0"]; //pega id via url
       
        $pagamentoDao = new PagamentoDAO();
        $pagamentoDao->deletePagamento($id);
        
        header("Location: /pagamento/listar"); 
       
    }
    
    
}
    
?>



