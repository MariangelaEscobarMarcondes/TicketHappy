<?php
class HomeController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    
    public function home(){ //testando login
       
        $id = $_SESSION["_ID"];
        
        //PEGANDO DADOS DO MODEL
        $loginDao = new LoginDAO();
        $usuario = $loginDao->getUsuario($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["id"] = $usuario->getId();
        $dado["nome"] = $usuario->getNome();
        
        $this->view->renderizar("header");
        $this->view->interpolar("home",$dado);
        $this->view->renderizar("footer");
     
       
    }
    
    public function especiais(){
        $id = $_SESSION["_ID"];
        
        //PEGANDO DADOS DO MODEL
        $loginDao = new LoginDAO();
        $usuario = $loginDao->getUsuario($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["id"] = $usuario->getId();
        $dado["nome"] = $usuario->getNome();
        
        $this->view->renderizar("header");
        $this->view->interpolar("especiais",$dado);
        $this->view->renderizar("footer");
        /*
        $this->view->renderizar("header");
        $this->view->renderizar("especiais");
        $this->view->renderizar('footer');
        */
    }
    
    public function exposicoes(){
         $id = $_SESSION["_ID"];
        
        //PEGANDO DADOS DO MODEL
        $loginDao = new LoginDAO();
        $usuario = $loginDao->getUsuario($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["id"] = $usuario->getId();
        $dado["nome"] = $usuario->getNome();
        
        $this->view->renderizar("header");
        $this->view->interpolar("exposicoes",$dado);
        $this->view->renderizar("footer");
        
        /*
        $this->view->renderizar("header");
        $this->view->renderizar("exposicoes");
        $this->view->renderizar('footer');
        */
    }
    
    public function festivais(){
         $id = $_SESSION["_ID"];
        
        //PEGANDO DADOS DO MODEL
        $loginDao = new LoginDAO();
        $usuario = $loginDao->getUsuario($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["id"] = $usuario->getId();
        $dado["nome"] = $usuario->getNome();
        
        $this->view->renderizar("header");
        $this->view->interpolar("festivais",$dado);
        $this->view->renderizar("footer");
        
        /*
        $this->view->renderizar("header");
        $this->view->renderizar("festivais");
        $this->view->renderizar('footer');
        */
    }
    
    public function orquestraEdanca(){
        $id = $_SESSION["_ID"];
        
        //PEGANDO DADOS DO MODEL
        $loginDao = new LoginDAO();
        $usuario = $loginDao->getUsuario($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["id"] = $usuario->getId();
        $dado["nome"] = $usuario->getNome();
        
        $this->view->renderizar("header");
        $this->view->interpolar("orquestra_danca",$dado);
        $this->view->renderizar("footer");
        
        /*
        $this->view->renderizar("header");
        $this->view->renderizar("orquestra_danca");
        $this->view->renderizar('footer');
        */
    }
    
    public function internacional(){
         $id = $_SESSION["_ID"];
        
        //PEGANDO DADOS DO MODEL
        $loginDao = new LoginDAO();
        $usuario = $loginDao->getUsuario($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["id"] = $usuario->getId();
        $dado["nome"] = $usuario->getNome();
        
        $this->view->renderizar("header");
        $this->view->interpolar("shows_internacional",$dado);
        $this->view->renderizar("footer");
        
        
        /*
        $this->view->renderizar("header");
        $this->view->renderizar("shows_internacional");
        $this->view->renderizar('footer');
        */
    }
    
    public function nacional(){
         $id = $_SESSION["_ID"];
        
        //PEGANDO DADOS DO MODEL
        $loginDao = new LoginDAO();
        $usuario = $loginDao->getUsuario($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["id"] = $usuario->getId();
        $dado["nome"] = $usuario->getNome();
        
        $this->view->renderizar("header");
        $this->view->interpolar("shows_nacional",$dado);
        $this->view->renderizar("footer");
        
        /*
        $this->view->renderizar("header");
        $this->view->renderizar("shows_nacional");
        $this->view->renderizar('footer');
        */
    }
    
    public function comedia(){
         $id = $_SESSION["_ID"];
        
        //PEGANDO DADOS DO MODEL
        $loginDao = new LoginDAO();
        $usuario = $loginDao->getUsuario($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["id"] = $usuario->getId();
        $dado["nome"] = $usuario->getNome();
        
        $this->view->renderizar("header");
        $this->view->interpolar("teatro_comedia",$dado);
        $this->view->renderizar("footer");
        
        
        /*
        $this->view->renderizar("header");
        $this->view->renderizar("teatro_comedia");
        $this->view->renderizar('footer');
        */
    }
    
    public function infantil(){
         $id = $_SESSION["_ID"];
        
        //PEGANDO DADOS DO MODEL
        $loginDao = new LoginDAO();
        $usuario = $loginDao->getUsuario($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["id"] = $usuario->getId();
        $dado["nome"] = $usuario->getNome();
        
        $this->view->renderizar("header");
        $this->view->interpolar("teatro_infantil",$dado);
        $this->view->renderizar("footer");
        
        /*
        $this->view->renderizar("header");
        $this->view->renderizar("teatro_infantil");
        $this->view->renderizar('footer');
        */
    }
    
    public function musical(){
         $id = $_SESSION["_ID"];
        
        //PEGANDO DADOS DO MODEL
        $loginDao = new LoginDAO();
        $usuario = $loginDao->getUsuario($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["id"] = $usuario->getId();
        $dado["nome"] = $usuario->getNome();
        
        $this->view->renderizar("header");
        $this->view->interpolar("teatro_musical",$dado);
        $this->view->renderizar("footer");
        
        /*
        $this->view->renderizar("header");
        $this->view->renderizar("teatro_musical");
        $this->view->renderizar('footer');
        */
    }
    
    public function laNouba(){
         $id = $_SESSION["_ID"];
        
        //PEGANDO DADOS DO MODEL
        $loginDao = new LoginDAO();
        $usuario = $loginDao->getUsuario($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["id"] = $usuario->getId();
        $dado["nome"] = $usuario->getNome();
        
        $this->view->renderizar("header");
        $this->view->interpolar("la_nouba",$dado);
        $this->view->renderizar("footer");
        
        /*
        $this->view->renderizar("header");
        $this->view->renderizar("la_nouba");
        $this->view->renderizar('footer');
        */
    }
    
    public function oReiLeao(){
         $id = $_SESSION["_ID"];
        
        //PEGANDO DADOS DO MODEL
        $loginDao = new LoginDAO();
        $usuario = $loginDao->getUsuario($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["id"] = $usuario->getId();
        $dado["nome"] = $usuario->getNome();
        
        $this->view->renderizar("header");
        $this->view->interpolar("o_rei_leao",$dado);
        $this->view->renderizar("footer");
        
        /*
        $this->view->renderizar("header");
        $this->view->renderizar("o_rei_leao");
        $this->view->renderizar('footer');
        */
    }
    
    public function coldplay(){
         $id = $_SESSION["_ID"];
        
        //PEGANDO DADOS DO MODEL
        $loginDao = new LoginDAO();
        $usuario = $loginDao->getUsuario($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["id"] = $usuario->getId();
        $dado["nome"] = $usuario->getNome();
        
        $this->view->renderizar("header");
        $this->view->interpolar("coldplay",$dado);
        $this->view->renderizar("footer");
        
        /*
        $this->view->renderizar("header");
        $this->view->renderizar("coldplay");
        $this->view->renderizar('footer');
        */
    }
    
    public function teatroMagico(){
         $id = $_SESSION["_ID"];
        
        //PEGANDO DADOS DO MODEL
        $loginDao = new LoginDAO();
        $usuario = $loginDao->getUsuario($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["id"] = $usuario->getId();
        $dado["nome"] = $usuario->getNome();
        
        $this->view->renderizar("header");
        $this->view->interpolar("teatro_magico",$dado);
        $this->view->renderizar("footer");
        
        /*
        $this->view->renderizar("header");
        $this->view->renderizar("teatro_magico");
        $this->view->renderizar('footer');
        */
    }
    
    public function ladoDosCisnes(){
         $id = $_SESSION["_ID"];
        
        //PEGANDO DADOS DO MODEL
        $loginDao = new LoginDAO();
        $usuario = $loginDao->getUsuario($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["id"] = $usuario->getId();
        $dado["nome"] = $usuario->getNome();
        
        $this->view->renderizar("header");
        $this->view->interpolar("lago_dos_cisnes",$dado);
        $this->view->renderizar("footer");
        
        /*
        $this->view->renderizar("header");
        $this->view->renderizar("teatro_magico");
        $this->view->renderizar('footer');
        */
    }
    
    
    
    
       
   
    
}
?>
