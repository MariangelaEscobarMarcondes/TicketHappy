<?php

class View{
    
    //o $pagina vai renderizar a pagina determinada pelo controll
    public function renderizar($pagina){
        require_once $pagina . ".php"; // vai cola a pag (ola.php)
    }
    
    public function interpolar($pagina,$dado){
        require_once $pagina . ".php";
    }
   
    
    
}

?>