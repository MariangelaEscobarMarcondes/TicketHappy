<?php

class CadastroController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    
     public function cadastroLogin(){
        $this->view->renderizar("login");
    }
    // chama o formulario de login (login.php)
    // https://ticket-happy-mariangela.c9users.io/cadastro/cadastroLogin  
    
    //esta fazendo um redirect
    public function sucesso(){
       $this->view->renderizar("sucesso"); 
    }
    
    public function perfil(){
        $id = $_GET["arg0"];
        
        //PEGANDO DADOS DO MODEL
        $userDao = new UsuarioDAO();       //para o site Ticket Happy o file chama-se UsuarioDAO1.php
        $usuario = $userDao->getUsuario($id);
        // -----------------------------
        
        //  NO NOSSO CASO, ACHO QUE NAO PRECISAMOS MANDAR ESSAS INFORMACOES PARA A VIEW, NEH?
        
        // MANDANDO PARA VIEW
        // $dado["nome"] = $usuario->getNome();
        // $dado["login"] = $usuario->getLogin();
        // $this->view->interpolar("perfil",$dado);
        // ------------------------------
    }
    // https://mvc-dinorachristovam.c9users.io/usuario/perfil/1  
    
    
    public function inserir(){
        //Obtem da view
        $nome           = $_POST["nome"];
        $cpf            = $_POST["cpf"];
        $dt_nasc        = $_POST["dataNascimento"];
        $telefone       = $_POST["telefone"];
        $celular        = $_POST["celular"];
        $sexo           = $_POST["sexo"];     // nao sei se esta certo
        $login          = $_POST["email"];     // o email preenchido no cadastro vai como login no banco
        $senha          = $_POST["senha"];
        $endereco       = $_POST["endereco"];
        $numero         = $_POST["numero"];
        $apartamento    = $_POST["apartamento"];
        $bairro         = $_POST["bairro"];
        $cidade         = $_POST["cidade"];
        $estado         = $_POST["estado"];
        $cep            = $_POST["cep"];
        
        //ignorar id = autoincremento
        
        //passa para o UsuarioModel
        $usuario = new UsuarioModel(0, $nome, $cpf, $dt_nasc, $telefone, $celular, $sexo, 
                                    $login, $senha, $endereco, $numero, $apartamento,  
                                    $bairro, $cidade, $estado, $cep);
        
        $usuarioDao = new UsuarioDAO();
        
        //PASSA AO MODEL
        $ret = $usuarioDao->insert($usuario);
        
        if($ret === ""){
            header("Location: /cadastro/sucesso");    
        }else{
            $this->view->interpolar("errosql",$ret);
        } 
        
        
    }
    
    
    
    
    
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