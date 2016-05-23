<?php

class HomeController extends Controller{
    
    /*public function __call($m,$a){
        require_once "view/View.php";
        $vi = new View();
        $vi->renderizar("erro");
    }*/
    
    /*
    public function ola(){
        require_once "view/View.php";//tah chamando do app
        $vi = new View();
        //$this->view->load("ola");
        $vi->renderizar("ola");
    }
    */
    

    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    // /home/ola
    public function ola(){
        $this->view->renderizar("ola");
        $_SESSION["_OI"] = "Ola";
    }
    // /home/formulario
    public function formulario(){
        $this->view->renderizar("userform");
    }
    // /home/outro
    public function outro(){
        echo $_POST["nome"] . "<br>";
        echo $_SESSION["_OI"];
    }
       
   
    
}

?>


