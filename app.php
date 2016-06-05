<?php
// c9 open .htaccess

class App{
    //VEM DA URL
    private $met, $clazz;
    
    public function __construct($met,$clazz){
        $this->met = $met;
        $this->clazz = $clazz;
    }
    
    public function startApp(){
        
        $clazzName = ucfirst($this->clazz) . "Controller";
        $modelName = ucfirst($this->clazz) . "Model";
        
        if($modelName == "HomeModel" || $modelName == "EspeciaisModel" || $modelName == "ExposicoesModel" || $modelName == "FestivaisModel" ||
           $modelName == "orquestraEdancaModel" || $modelName == "internacionalModel" || $modelName == "nacionalModel" || 
           $modelName == "comediaModel" || $modelName == "infantilModel" || $modelName == "musicalModel" || $modelName == "logadoModel"){
               
               require_once "model/LoginDAO.php";
                require_once "model/LoginModel.php";
            
        }elseif($modelName == "LoginModel"){
            require_once "model/UsuarioModel.php";
            //require_once "model/UsuarioDAO.php";
            require_once "model/LoginModel.php";
            require_once "model/LoginDAO.php";
        }else{
            require_once "model/" . $modelName . ".php";
            require_once "model/" . ucfirst($this->clazz) . "DAO.php";
        }
        
        require_once "controller/Controller.php";
        require_once "controller/" . $clazzName . ".php";
        $hc = new $clazzName();
        $met = $this->met;
        $hc->$met();
    } 
    /*
    public function startApp(){
        // chama o controller
        require_once "controller/HomeController.php";
        require_once "controller/UsuarioController.php";
        $clazzName = ucfirst($this->clazz) . "Controller"; //ucfirst - deixa 1 letra maiuscula | o $this->clazz vem da rota
        $hc = new $clazzName();
        //$hc = new HomeController();
        $met = $this->met;
        $hc->$met(); //eh o metodo q vem da url
    }
    */
}

session_start();
require_once "view/View.php";

$met = $_GET["metodo"];
$clazz = $_GET["classe"];
$r = new App($met,$clazz);
$r->startApp();



//home -> HomeController
// ola -> metodo ola() do HomeController

//1) Crie um controller chamado UsuarioController
//   Contendo o metodo cadastro()

//2) Crie um formulario (html) contido num arquivo chamdo
//   userform.php. Contendo um campo nome e um botao(submit)

// 3) Teste a aplicacao usando a rota correta.
// Qual rota vc usou? /usuario/cadastro

//p/ casa = Soluicionar o problema de validacao de instancias de classes que nao existem

//https://ide.c9.io/romefeller/aulaphp2


//na bash, executar esses dois comandos. Nessa ordem
//mysql-ctl start
//phpmyadmin-ctl install

//para entrar no mysql
// https://ticket-happy-mariangela.c9users.io/phpmyadmin/
//  Username: mariangela



/* 
-o fluxo começa no app

 app.php -> controla require_once de model/view e controller(estao todos em arquivos separados)
 A partir de uma rota chama o controller certo.
 
 Se rota for /login/formulario
 ele chamara LoginController, metodo formulario()
 
 classe de login = /login
 metodo da classe login = /formulario
 
*/

/*
CONTROLLER
-vai checar a autorizacao
-checar autenticacao
-renderizar view
-obter/enviar dados para o model
*/

/*
VIEW
- interpolacoes (<? = $dados) se houver
-html/css/js
*/

/*
MODEL
- representar uma tabela do BD
- CRUD com BD (create, read, update e delete)
*/


?>