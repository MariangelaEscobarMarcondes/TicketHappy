<?php
class ContatoController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
   
    public function cadastroContato(){
        $this->view->renderizar("header");
        $this->view->renderizar("contato");
        $this->view->renderizar("footer");
    }
    // https://ticket-happy-mariangela.c9users.io/contato/cadastroContato
    
    
    //esta fazendo um redirect
    public function sucesso(){
       $this->view->renderizar("header");
       $this->view->renderizar("sucesso"); 
       $this->view->renderizar("footer");
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
    
    public function listar(){
        
        $contatoDao = new ContatoDAO();
        
        $todosContatos = $contatoDao->getContatos();
        
        $this->view->renderizar("header");
        $this->view->interpolar("listar_contato",$todosContatos);
        $this->view->renderizar("footer");
    }
    
    // https://ticket-happy-mariangela.c9users.io/contato/listar
    
    // carrega os campos na pagina contatoAlterar.php
    public function alterar(){
        $id = $_GET["arg0"];
        
        $contatoDao = new ContatoDAO();
        $contato = $contatoDao->getContato($id);
        
        $dado["id"] = $contato->getId(); // estou trazendo o id pq na function update nao esta pegando o id pelo GET
        
        // MANDANDO PARA VIEW
        $dado["nomeCompleto"] = $contato->getNomeCompleto();
        $dado["email"]        = $contato->getEmail();
        $dado["assunto"]      = $contato->getAssunto();
        $dado["mensagem"]     = $contato->getMensagem(); //nao esta carregando
        
        $this->view->renderizar("header");
        
        $this->view->interpolar("contatoAlterar",$dado);
        
        $this->view->renderizar("footer");
        
    }
    
    public function update(){
        //$id = $_GET["arg0"];
        
         //Obtem da view
        $id = $_POST["id"];
        
        $nomeCompleto = $_POST["nomeCompleto"];
        $email        = $_POST["email"];
        $assunto      = $_POST["assunto"];
        $mensagem     = $_POST["mensagem"];
        
        //passa para o ContatoModel
        $contatoModel = new ContatoModel($id,$nomeCompleto, $email, $assunto, $mensagem);
        $contatoDao = new ContatoDAO();
        
        //PASSA AO MODEL
        $contatoDao->updateContato($contatoModel);
        
        header("Location: /contato/listar");
        /*
         if($ret === ""){
            header("Location: /contato/listar");   
        }else{
            $this->view->interpolar("errosql",$ret);
        }
       
        */
    }
    
    public function deletar(){
        $id = $_GET["arg0"]; //pega id via url
       
        $contatoDao = new ContatoDAO();
        $contatoDao->deleteContato($id);
        
        header("Location: /contato/listar"); 
       
    }
    
    
    
   
    
}
?>

