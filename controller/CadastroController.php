<?php

class CadastroController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    
    public function cadastro(){
        $this->view->renderizar("header");
        $this->view->renderizar("cadastro");
        $this->view->renderizar("footer");
    }
    // chama o formulario de login (login.php)
    // https://ticket-happy-mariangela.c9users.io/cadastro/cadastro 
    
    //esta fazendo um redirect
    public function sucesso(){
       $this->view->renderizar("header");
       $this->view->renderizar("sucesso"); 
       $this->view->renderizar("footer");
    }
    
    public function inserir(){
        //Obtem da view
        $nome           = $_POST["nome"];
        $email          = $_POST["email"];
        $cpf            = $_POST["cpf"];
        $dataNascimento = $_POST["dataNascimento"];
        $telefone       = $_POST["telefone"];
        $celular        = $_POST["celular"];
        $sexo           = $_POST["sexo"];     
        $endereco       = $_POST["endereco"];
        $numero         = $_POST["numero"];
        $apartamento    = $_POST["apartamento"];
        $bairro         = $_POST["bairro"];
        $cidade         = $_POST["cidade"];
        $estado         = $_POST["estado"];
        $cep            = $_POST["cep"];
        $senha          = $_POST["senha"];
        
        //ignorar id = autoincremento
        
        //passa para o CadastroModel
        $cadastro = new CadastroModel(0, $nome, $email, $cpf, $dataNascimento, $telefone,
                                       $celular, $sexo, $endereco, $numero, $apartamento,
                                       $bairro, $cidade, $estado, $cep, $senha);
        
        $cadastroDao = new CadastroDAO();
        
        //PASSA AO DAO
        $ret = $cadastroDao->insert($cadastro);
        
        if($ret === ""){
            header("Location: /cadastro/sucesso");    
        }else{
            $this->view->interpolar("errosql",$ret);
        } 
    }
    
     public function listar(){
        
        $cadastroDao = new CadastroDAO();
        
        $todosCadastros = $cadastroDao->getCadastros();
        
        $this->view->renderizar("header");
        
        $this->view->interpolar("listar_cadastro",$todosCadastros);
        
        $this->view->renderizar("footer");
   
    }
    
    // https://ticket-happy-mariangela.c9users.io/contato/listar
    
    // carrega os campos na pagina contatoAlterar.php
    public function alterar(){
        $id = $_GET["arg0"];
        
        $cadastroDao = new CadastroDAO();
        $cadastro = $cadastroDao->getCadastro($id);
        
        $dado["id"] = $cadastro->getId(); // estou trazendo o id pq na function update nao esta pegando o id pelo GET
        
        $nbr_cpf = $cadastro->getCpf();

        $parte_um     = substr($nbr_cpf, 0, 3);
        $parte_dois   = substr($nbr_cpf, 3, 3);
        $parte_tres   = substr($nbr_cpf, 6, 3);
        $parte_quatro = substr($nbr_cpf, 9, 2);
        $monta_cpf = "$parte_um.$parte_dois.$parte_tres-$parte_quatro";
        
        $nbr_tel = $cadastro->getTelefone();

        $parte_um_t     = substr($nbr_tel, 0, 2); //13 = [0][1]
        $parte_dois_t   = substr($nbr_tel, 2, 4); //1234 [2][3][4][5]
        $parte_tres_t   = substr($nbr_tel, 6, 4); //1234 [6][7][8][9]
        $monta_telefone = "($parte_um_t)$parte_dois_t-$parte_tres_t";
        
        
        $nbr_cel = $cadastro->getCelular();

        $parte_um_c     = substr($nbr_cel, 0, 2); //13 = [0][1]
        $parte_dois_c   = substr($nbr_cel, 2, 4); //1234 [2][3][4][5]
        $parte_tres_c   = substr($nbr_cel, 6, 4); //1234 [6][7][8][9]
        $monta_celular = "($parte_um_c)$parte_dois_c-$parte_tres_c";
        
        $nbr_cep = $cadastro->getCep();

        $parte_um_cep     = substr($nbr_cep, 0, 5); //13 = [0][1][2][3][4]
        $parte_dois_cep   = substr($nbr_cep, 5, 3); //1234 [5][6][7]
        $monta_cep = "$parte_um_cep-$parte_dois_cep";


        
        // MANDANDO PARA VIEW
        $dado["nome"]           = $cadastro->getNome();
        $dado["email"]          = $cadastro->getEmail();
        $dado["cpf"]            = $monta_cpf;
        $dado["dataNascimento"] = $cadastro->getDataNasc();
        $dado["telefone"]       = $monta_telefone;
        $dado["celular"]        = $monta_celular;
        $dado["sexo"]           = $cadastro->getSexo();
        $dado["endereco"]       = $cadastro->getEndereco();
        $dado["numero"]         = $cadastro->getNumero();
        $dado["apartamento"]    = $cadastro->getApartamento();
        $dado["bairro"]         = $cadastro->getBairro();
        $dado["cidade"]         = $cadastro->getCidade();
        $dado["estado"]         = $cadastro->getEstado();
        $dado["cep"]            = $monta_cep;
        $dado["senha"]          = $cadastro->getSenha();
       
        $this->view->renderizar("header");
        
        $this->view->interpolar("cadastroAlterar",$dado);
        
        $this->view->renderizar("footer");
        
    }
    
    public function update(){
        //$id = $_GET["arg0"];
        
         //Obtem da view
        $id = $_POST["id"];
       
        $nome        = $_POST["nome"];
        $email       = $_POST["email"];
        $cpf         = $_POST["cpf"];
        $dataNascimento = $_POST["dataNascimento"];
        $telefone    = $_POST["telefone"];
        $celular     = $_POST["celular"];
        $sexo        = $_POST["sexo"];     
        $endereco    = $_POST["endereco"];
        $numero      = $_POST["numero"];
        $apartamento = $_POST["apartamento"];
        $bairro      = $_POST["bairro"];
        $cidade      = $_POST["cidade"];
        $estado      = $_POST["estado"];
        $cep         = $_POST["cep"];
        $senha       = $_POST["senha"];
        
        //passa para o ContatoModel
        $cadastroModel = new CadastroModel($id, $nome, $email, $cpf, $dataNascimento, $telefone,
                                           $celular, $sexo, $endereco, $numero, $apartamento,
                                           $bairro, $cidade, $estado, $cep, $senha);
        $cadastroDao = new CadastroDAO();
        
        //PASSA AO DAO
        $cadastroDao->updateCadastro($cadastroModel);
        
        header("Location: /cadastro/listar");
        
    }
    
    public function deletar(){
        $id = $_GET["arg0"]; //pega id via url
       
        $cadastroDao = new CadastroDAO();
        $cadastroDao->deleteCadastro($id);
        
        header("Location: /cadastro/listar"); 
       
    }
    
    
   
    
}

?>