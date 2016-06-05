<?php

class HomeController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    
    public function home(){
        $this->view->renderizar("header");
        $this->view->renderizar("home");
        $this->view->renderizar('footer'); //chama o footer.php
    }
    
    public function especiais(){
        $this->view->renderizar("header");
        $this->view->renderizar("especiais");
        $this->view->renderizar('footer');
    }
    
    public function exposicoes(){
        $this->view->renderizar("header");
        $this->view->renderizar("exposicoes");
        $this->view->renderizar('footer');
    }
    
    public function festivais(){
        $this->view->renderizar("header");
        $this->view->renderizar("festivais");
        $this->view->renderizar('footer');
    }
    
    public function orquestraEdanca(){
        $this->view->renderizar("header");
        $this->view->renderizar("orquestra_danca");
        $this->view->renderizar('footer');
    }
    
    public function internacional(){
        $this->view->renderizar("header");
        $this->view->renderizar("shows_internacional");
        $this->view->renderizar('footer');
    }
    
    public function nacional(){
        $this->view->renderizar("header");
        $this->view->renderizar("shows_nacional");
        $this->view->renderizar('footer');
    }
    
    public function comedia(){
        $this->view->renderizar("header");
        $this->view->renderizar("teatro_comedia");
        $this->view->renderizar('footer');
    }
    
    public function infantil(){
        $this->view->renderizar("header");
        $this->view->renderizar("teatro_infantil");
        $this->view->renderizar('footer');
    }
    
    public function musical(){
        $this->view->renderizar("header");
        $this->view->renderizar("teatro_musical");
        $this->view->renderizar('footer');
    }
    
    public function laNouba(){
        $this->view->renderizar("header");
        $this->view->renderizar("la_nouba");
        $this->view->renderizar('footer');
    }
    
    public function oReiLeao(){
        $this->view->renderizar("header");
        $this->view->renderizar("o_rei_leao");
        $this->view->renderizar('footer');
    }
    
    public function coldplay(){
        $this->view->renderizar("header");
        $this->view->renderizar("coldplay");
        $this->view->renderizar('footer');
    }
    
    
    
    
       
   
    
}

?>


