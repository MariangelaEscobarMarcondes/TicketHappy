<?php

class CompraController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
   
    public function cadastroCompras(){
        $this->view->renderizar("cadastro_compras");
    }
    // https://ticket-happy-mariangela.c9users.io/compra/cadastroCompras
    
    
    //esta fazendo um redirect
    public function sucesso(){
       $this->view->renderizar("sucesso"); 
    }
    
    public function inserir(){
        
        //Obtem da view
        $nome        = $_POST["nome"];
        $preco       = $_POST["preco"];
        $imagem      = $_POST["imagem"];
        
        //ignorar id = autoincremento
        
        //passa para o EventoModel
        $compraModel = new compraModel(0, $nome, $preco, $imagem);
        $compraDao = new compraDAO();
        
        //PASSA AO MODEL
         $ret = $compraDao->insert($compraModel);
        
        if($ret === ""){
            header("Location: /compra/sucesso");    
        }else{
            $this->view->interpolar("errosql",$ret);
        } 
    }
    // chama o controller eventoController e o formulario ==> vai chamar essa funcao quando clicar no botao
    // https://ticket-happy-mariangela.c9users.io/compra/inserir  
    
    
      public function deletar(){
        $id = $_GET["arg0"];
       
        $compraDAO = new CompraDAO();
        $compraDAO->deleteCompra($id);
         
    }
    
    public function listar(){
        $id = $_GET["arg0"];
        
        //PEGANDO DADOS DO MODEL
        $compraDAO = new CompraDAO();
        $compra = $compraDAO->getAllCompra($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["nome"] = $compra->getNome();
        $dado["preco"] = $compra->getPreco();
        $dado["imagem"] = $compra->getImagem();
      
        
        $this->view->interpolar("listar",$dado);
        // ------------------------------
    }
    //https://ticket-happy-mariangela.c9users.io/compra/listar/1
    
    public function alterar(){
        $id = $_GET["arg0"];
        
        
    }
    
    
   //http://www.davidchc.com.br/video-aula/php/carrinho-de-compras-com-php/
    
}

?>



