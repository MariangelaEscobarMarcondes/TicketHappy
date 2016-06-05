<?php

class LoginController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    
    public function logout(){
        $this->estaAutorizado();
        //apagar a sessao
        unset($_SESSION["_ID"]);
        $this->view->renderizar("logout");
    }
    // https://ticket-happy-mariangela.c9users.io/login/logout
    
    
    public function formulario(){
        //apagar a sessao
        unset($_SESSION["_ID"]);
        
        $this->view->renderizar("header");
        $this->view->renderizar("login");
        $this->view->renderizar('footer');
    }
    //PRIMEIRO CHAMA ESSE CAMINHO PARA PODER CHAMAR O FORMULARIO DE LOGIN.... OK 
    // https://ticket-happy-mariangela.c9users.io/login/formulario 
   
    public function autenticar(){
       
        //Obtem da view
        $email = $_POST["email"]; // o email eh o login
        $senha = $_POST["senha"];
        
         $options = [
             'cost' => 11,
             'salt' => 'Cf1f11ePArKlBJomM0F6aJ',
        ];
        
        $senhaHash =  password_hash($senha, PASSWORD_BCRYPT, $options);
        
        $loginModel = new LoginModel(0,$email,"", $senhaHash);
        
        $loginDAO = new LoginDAO();
        
        //PASSA AO DAO
        $ehLoginCorreto = $loginDAO->authUsuario($loginModel);
        
    
        //sera falsa se nao encontrar
        //sera o id se encontrar
        if($ehLoginCorreto === false){
            header("Location: /login/formulario");
        }else{
            $_SESSION["_ID"] = $ehLoginCorreto; 
           
            header("Location: /login/perfil/" . $ehLoginCorreto);
           
        }
    }
    
     public function perfil(){
        $id = $_GET["arg0"];
        
        //PEGANDO DADOS DO MODEL
        $loginDao = new LoginDAO();
        $usuario = $loginDao->getUsuario($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["id"] = $usuario->getId();
        $dado["nome"] = $usuario->getNome();
        
        $this->view->renderizar("header");
        $this->view->interpolar("perfil",$dado);
        $this->view->renderizar("footer");
        // ------------------------------
    }
    
    
}  

    
    
    
?>