<?php

class EventoController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
   
    public function cadastroEventos(){
        $this->view->renderizar("cadastro_eventos");
    }
    // https://ticket-happy-mariangela.c9users.io/evento/cadastroEventos
    
    
    //esta fazendo um redirect
    public function sucesso(){
       $this->view->renderizar("sucesso"); 
    }
    
    public function inserir(){
        
        //Obtem da view
        $evento      = $_POST["evento"];
        $local       = $_POST["local"];
        $cidade      = $_POST["cidade"];
        $categoria   = $_POST["categoria"];
        $texto       = $_POST["texto"];
        $data        = $_POST["data"];
        $horario     = $_POST["horario"];
        $preco       = $_POST["preco"];
        $onde        = $_POST["onde"];
        $imagem      = $_POST["imagem"];
        $imagemFundo = $_POST["imagemFundo"];
        
        //ignorar id = autoincremento
        
        //passa para o EventoModel
        $eventoModel = new EventoModel(0, $evento, $local, $cidade, $categoria, $texto, $data, $horario, $preco, $onde, $imagem, $imagemFundo);
        $eventoDao = new EventoDAO();
        
        //PASSA AO MODEL
        $ret = $eventoDao->insert($eventoModel);
        
        if($ret === ""){
            header("Location: /evento/sucesso");    
        }else{
            $this->view->interpolar("errosql",$ret);
        } 
    }
    // chama o controller eventoController e o formulario ==> vai chamar essa funcao quando clicar no botao
    // https://ticket-happy-mariangela.c9users.io/evento/inserir  
    
    
      public function deletar(){
        $id = $_GET["arg0"];
       
        $eventoDao = new EventoDAO();
        $eventoDao->deleteEvento($id);
         
    }
    
    public function listar(){
        $id = $_GET["arg0"];
        
        //PEGANDO DADOS DO MODEL
        $eventoDao = new EventoDAO();
        $evento = $eventoDao->getAllEvento($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["evento"] = $evento->getEvento();
        $dado["local"] = $evento->getLocal();
        $dado["cidade"] = $evento->getCidade();
        $dado["categoria"] = $evento->getCategoria();
        
        $this->view->interpolar("listar",$dado);
        // ------------------------------
    }
    //https://ticket-happy-mariangela.c9users.io/evento/listar/1
    
    public function alterar(){
        $id = $_GET["arg0"];
        
        
    }
    
    
   
    
}



?>

