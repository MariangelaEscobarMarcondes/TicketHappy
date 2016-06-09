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
        $credito                  = $_POST["cd_credito"];
        $titular                  = $_POST["nm_titular"];
        $validade                 = $_POST["dt_validade"];
        $seguranca                = $_POST["cd_seguranca"];
        $bandeira                 = $_POST["ds_bandeira"];
        
        
        
        //passa para o EventoModel
        $pagamento = new PagamentoModel(0,  $credito, $titular, $validade, $seguranca, $bandeira);
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
    // https://ticket-happy-mariangela.c9users.io/carrinho/inserir  
    
    
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



