<?php

class ContatoController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
   
    public function cadastroContato(){
        $this->view->renderizar("contato");
    }
    // https://ticket-happy-mariangela.c9users.io/contato/cadastroContato
    
    
    //esta fazendo um redirect
    public function sucesso(){
       $this->view->renderizar("sucesso"); 
    }
    
    public function inserir(){
        
        //Obtem da view
        $nomeCompleto = $_POST["nomeCompleto"];
        $email        = $_POST["email"];
        $assunto      = $_POST["assunto"];
        $mensagem     = $_POST["mensagem"];
       
        
        //ignorar id = autoincremento
        
        //passa para o ContatoModel
        $contatoModel = new ContatoModel(0, $nomeCompleto, $email, $assunto, $mensagem);
        $contatoDao = new ContatoDAO();
        
        //PASSA AO MODEL
        $ret = $contatoDao->insert($contatoModel);
        
        if($ret === ""){
            header("Location: /contato/sucesso");    
        }else{
            $this->view->interpolar("errosql",$ret);
        } 
    }
    // chama o controller eventoController e o formulario ==> vai chamar essa funcao quando clicar no botao
    // https://ticket-happy-mariangela.c9users.io/evento/inserir  
    
    
    public function listar(){
        
        $contatoDao = new ContatoDAO();
        
        $todosContatos = $contatoDao->getContatos();
        
        $this->view->interpolar("listar_contato",$todosContatos);
    }
    
    public function alterar(){
        $id = $_GET["arg0"];
        
        $contatoDao = new ContatoDAO();
        
    }
    
    public function deletar(){
        $id = $_GET["arg0"]; //pega id via url
       
        $contatoDao = new ContatoDAO();
        $contatoDao->deleteContato($id);
        
        $this->view->renderizar("/contato/listar"); 
         
    }
    
    
    
   
    
}



?>

