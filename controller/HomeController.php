<?php
class HomeController extends Controller{
     public $dado;
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    
   
    
    public function teste(){ //testando login
       
        $id = $_SESSION["_ID"];
        
        //PEGANDO DADOS DO MODEL
        $loginDao = new LoginDAO();
        $usuario = $loginDao->getUsuario($id);
        // -----------------------------
        
        // MANDANDO PARA VIEW
        $dado["id"] = $usuario->getId();
        $dado["nome"] = $usuario->getNome();
        
        return $dado;
       
    }
    
    public function home(){ //testando login
        
        $this->view->renderizar("header");
        $this->view->interpolar("home",$this->teste());
        $this->view->renderizar("footer");
     
       
    }
    
    public function especiais(){
        
        $this->view->renderizar("header");
        $this->view->interpolar("especiais",$this->teste());
        $this->view->renderizar("footer");
      
    }
    
    public function exposicoes(){
        
        $this->view->renderizar("header");
        $this->view->interpolar("exposicoes",$this->teste());
        $this->view->renderizar("footer");
        
    }
    
    public function festivais(){
        
        $this->view->renderizar("header");
        $this->view->interpolar("festivais",$this->teste());
        $this->view->renderizar("footer");
       
    }
    
    public function orquestraEdanca(){
     
        $this->view->renderizar("header");
        $this->view->interpolar("orquestra_danca",$this->teste());
        $this->view->renderizar("footer");
       
    }
    
    public function internacional(){
       
        $this->view->renderizar("header");
        $this->view->interpolar("shows_internacional",$this->teste());
        $this->view->renderizar("footer");
       
    }
    
    public function nacional(){
         
        $this->view->renderizar("header");
        $this->view->interpolar("shows_nacional",$this->teste());
        $this->view->renderizar("footer");
        
    }
    
    public function comedia(){
         
        $this->view->renderizar("header");
        $this->view->interpolar("teatro_comedia",$this->teste());
        $this->view->renderizar("footer");
       
    }
    
    public function infantil(){
    
        $this->view->renderizar("header");
        $this->view->interpolar("teatro_infantil",$this->teste());
        $this->view->renderizar("footer");
       
    }
    
    public function musical(){
      
        $this->view->renderizar("header");
        $this->view->interpolar("teatro_musical",$this->teste());
        $this->view->renderizar("footer");
     
    }
    
    public function laNouba(){
       
        $this->view->renderizar("header");
        $this->view->interpolar("la_nouba",$this->teste());
        $this->view->renderizar("footer");
     
    }
    
    public function oReiLeao(){
 
        $this->view->renderizar("header");
        $this->view->interpolar("o_rei_leao",$this->teste());
        $this->view->renderizar("footer");
       
    }
    
    public function coldplay(){
      
        $this->view->renderizar("header");
        $this->view->interpolar("coldplay",$this->teste());
        $this->view->renderizar("footer");
      
    }
    
    public function teatroMagico(){
    
        $this->view->renderizar("header");
        $this->view->interpolar("teatro_magico",$this->teste());
        $this->view->renderizar("footer");
      
    }
    
    public function ladoDosCisnes(){
       
        $this->view->renderizar("header");
        $this->view->interpolar("lago_dos_cisnes",$this->teste());
        $this->view->renderizar("footer");
       
    }
    
    
       
   
    
}
?>
