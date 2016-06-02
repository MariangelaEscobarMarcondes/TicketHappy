<?php

class CadastroController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    
    public function cadastro(){
        $this->view->renderizar("cadastro");
    }
    // chama o formulario de login (login.php)
    // https://ticket-happy-mariangela.c9users.io/cadastro/cadastro 
    
    //esta fazendo um redirect
    public function sucesso(){
       $this->view->renderizar("sucesso"); 
    }
    
    public function inserir(){
        //Obtem da view
        $nome           = $_POST["nome"];
        $email          = $_POST["email"];
        $cpf            = $_POST["cpf"];
        $dt_nasc        = $_POST["dataNascimento"];
        $telefone       = $_POST["telefone"];
        $celular        = $_POST["celular"];
        $sexo           = $_POST["sexo"];     // nao sei se esta certo
        $endereco       = $_POST["endereco"];
        $numero         = $_POST["numero"];
        $apartamento    = $_POST["apartamento"];
        $bairro         = $_POST["bairro"];
        $cidade         = $_POST["cidade"];
        $estado         = $_POST["estado"];
        $cep            = $_POST["cep"];
        $senha          = $_POST["senha"];
        
        //ignorar id = autoincremento
        
        //passa para o UsuarioModel
        $cadastro = new CadastroModel(0, $nome, $email, $cpf, $dt_nasc, $telefone,
                                       $celular, $sexo, $endereco, $numero, $apartamento,
                                       $bairro, $cidade, $estado, $cep, $senha);
        
        $cadastroDao = new CadastroDAO();
        
        //PASSA AO MODEL
        $ret = $cadastroDao->insert($cadastro);
        
        if($ret === ""){
            header("Location: /cadastro/sucesso");    
        }else{
            $this->view->interpolar("errosql",$ret);
        } 
        
        
    }
    
   
    
}

?>