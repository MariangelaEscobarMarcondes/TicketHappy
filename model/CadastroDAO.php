<?php

class CadastroDAO{
                          //nome da classe Model
    public function insert(CadastroModel $c){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
         
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        
        $stmt = $mysqli->prepare("INSERT INTO cadastro(nm_nome, ds_email, cd_cpf, dt_nascimento, cd_telefone, cd_celular,
                                                       sg_sexo, ds_endereco, cd_numero, ds_apartamento, ds_bairro, ds_cidade, 
                                                       sg_estado, cd_cep, ds_senha) 
                                                       VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        
        //Mudar aqui de acordo com a aula de seguranca
        $stmt->bind_param("ssssiississssis",$c->getNome(),$c->getEmail(),$c->getCpf(),$c->getDataNasc(),$c->getTelefone(),$c->getCelular(),
                                 $c->getSexo(),$c->getEndereco(), $c->getNumero(), $c->getApartamento(),$c->getBairro(), $c->getCidade(),
                                 $c->getEstado(), $c->getCep(), $c->getSenha());
        
        //----------------------------------------------
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
        /*
        $dbc = mysqli_connect("127.0.0.1", "mariangela", "", "ticketHappy") or die('erro ao conectar');
        $query = "insert into contatos(nm_nomeCompleto,ds_email,ds_assunto,ds_mensagem) values ('eu','e-mail', 'assunto teste', 'mensagem teste')";
        $data = mysqli_query($dbc, $query) or die ('erro ao submeter ao banco de dados');
        mysqli_close($dbc);
        */
    }
    
   

   
 
    
    
}

?>