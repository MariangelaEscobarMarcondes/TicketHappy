<?php

class UsuarioController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    
    public function cadastro(){
        $this->view->renderizar("userform");
    }
    //esta fazendo um redirect
    public function sucesso(){
       $this->view->renderizar("sucesso"); 
    }
    
    public function perfil(){
        $id = $_GET["arg0"];
        
        //PEGANDO DADOS DO MODEL
        $userDao = new UsuarioDAO();
        $usuario = $userDao->getUsuario($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["nome"] = $usuario->getNome();
        $dado["login"] = $usuario->getLogin();
        $this->view->interpolar("perfil",$dado);
        // ------------------------------
    }
    // https://mvc-dinorachristovam.c9users.io/usuario/perfil/1  
    
    
    public function inserir(){
        //Obtem da view
        $nome  = $_POST["nome"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        
        //ignorar id = autoincremento
        
        //passa para o UsuarioModel
        $usuario = new UsuarioModel(0, $nome, $login, $senha);
        $usuarioDao = new UsuarioDAO();
        //PASSA AO MODEL
        $ret = $userDao->insert($usuario);
        if($ret === ""){
            header("Location: /usuario/sucesso");    
        }else{
            $this->view->interpolar("errosql",$ret);
        } 
        
        
    }
    
    // chama o formulario
    // https://mvc-dinorachristovam.c9users.io/usuario/cadastro  
    
    
    
    /*
    public function __call($m,$a){
        require_once "view/View.php";
        $vi = new View();
        $vi->renderizar("erro");
    }
    
   public function cadastro(){
        require_once "view/View.php";//tah chamando do app
        $vi = new View();
        $vi->renderizar("userform");//view
    }
    */
   
    
}



?>

