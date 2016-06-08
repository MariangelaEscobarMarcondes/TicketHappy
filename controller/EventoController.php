<?php
class EventoController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
   
    public function cadastroEvento(){
        $this->view->renderizar("header");
        $this->view->renderizar("cadastro_eventos");
        $this->view->renderizar("footer");
    }
    // https://ticket-happy-mariangela.c9users.io/evento/cadastroEvento
    
    
    //esta fazendo um redirect
    public function sucesso(){
       $this->view->renderizar("header");
       $this->view->renderizar("sucesso"); 
       $this->view->renderizar("footer");
    }
    
    public function inserir(){
        
        //Obtem da view
        $evento     = $_POST["evento"];
        $valor      = $_POST["valor"];
        $quantidade = $_POST["quantidade"];
        $categoria  = $_POST["categoria"];
       
        
        //ignorar id = autoincremento
        
       
        $eventoModel = new EventoModel(0, $evento, $valor, $quantidade, $categoria);
        $eventoDao = new EventoDAO();
        
        //PASSA AO MODEL
        $ret = $eventoDao->insert($eventoModel);
        
        if($ret === ""){
            header("Location: /contato/sucesso");    
        }else{
            $this->view->interpolar("errosql",$ret);
        } 
    }
    
    public function listar(){
        
        $eventoDao = new EventoDAO();
        
        $todosEventos = $eventoDao->getEventos();
        
        $this->view->renderizar("header");
        $this->view->interpolar("listar_eventos",$todosEventos);
        $this->view->renderizar("footer");
        
    }
    
    public function Carrinho(){
        
        $eventoDao = new EventoDAO();
        
        $todosEventos = $eventoDao->getEventos();
        
        $this->view->renderizar("header");
        $this->view->interpolar("compra1",$todosEventos);
        $this->view->renderizar("footer");
    // https://ticket-happy-mariangela.c9users.io/evento/carrinho
    }
    
    // carrega os campos na pagina contatoAlterar.php
    public function alterar(){
        $id = $_GET["arg0"];
        
        $eventoDao = new EventoDAO();
        $evento = $eventoDao->getEvento($id);
        
        $dado["id"] = $evento->getId(); // estou trazendo o id pq na function update nao esta pegando o id pelo GET
        
        // MANDANDO PARA VIEW
        $dado["evento"]     = $evento->getEvento();
        $dado["valor"]      = $evento->getValor();
        $dado["quantidade"] = $evento->getQuantidade();
        $dado["categoria"]  = $evento->getCategoria(); //nao esta carregando
        
        $this->view->renderizar("header");
        
        $this->view->interpolar("eventoAlterar",$dado);
        
        $this->view->renderizar("footer");
        
    }
    
    public function update(){
        //$id = $_GET["arg0"];
        
         //Obtem da view
        $id = $_POST["id"];
        
        $evento     = $_POST["evento"];
        $valor      = $_POST["valor"];
        $quantidade = $_POST["quantidade"];
        $categoria  = $_POST["categoria"];
        
        //passa para o ContatoModel
        $eventoModel = new EventoModel($id,$evento, $valor, $quantidade, $categoria);
        $eventoDao = new EventoDAO();;
        
        //PASSA AO MODEL
        $eventoDao->updateEvento($eventoModel);
        
        header("Location: /evento/listar");
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
       
        $eventoDao = new EventoDAO();
        $eventoDao->deleteEvento($id);
        
        header("Location: /evento/listar"); 
       
    }
    
    
    
   
    
}
?>

