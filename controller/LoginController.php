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
        $this->view->renderizar("login");
    }
    //PRIMEIRO CHAMA ESSE CAMINHO PARA PODER CHAMAR O FORMULARIO DE LOGIN.... OK 
    // https://ticket-happy-mariangela.c9users.io/login/formulario 
   
    
    public function autenticar(){
       
        //Obtem da view
        $email = $_POST["email"]; // o email eh o login
        $senha = $_POST["senha"];
    
        // Gera um hash baseado em bcrypt
        $senha = 'senha';
        $custo = '08';       
        $salt = 'Cf1f11ePArKlBJomM0F6aJ';      
        $hash = crypt($senha, '$2a$' . $custo . '$' . $salt . '$');
        
        /*
        * Para verificar, ele deve buscar no banco de dados a hash armazenada 
        * no campo da senha do usuario (campo de 60 caracteres = VARCHAR (60))
        */
        
        //passa para o LoginModel
        $loginModel = new LoginModel(0, $email, $senha); //nao esta achando
        
        $loginDAO = new LoginDAO();
        
        //PASSA AO DAO
        $ehLoginCorreto = $loginDAO->authUsuario($loginModel);
        
        /*
        $loginDAO = new LoginDAO();

        $ehLoginCorreto = $loginDAO->authUsuario($email,$hash);   //esta dando erro nessa linha
        */
        
        //sera falsa se nao encontrar
        //sera o id se encontrar
        if($ehLoginCorreto === false){
            header("Location: /login/formulario");
        }else{
            $_SESSION["_ID"] = $ehLoginCorreto; 
            header("Location: /usuario/perfil/" . $ehLoginCorreto);
        }
    }
    
}  

    
    
    
?>