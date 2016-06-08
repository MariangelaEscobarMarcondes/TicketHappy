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
        
        
        $options = [
             'cost' => 11,
             'salt' => 'Cf1f11ePArKlBJomM0F6aJ',
        ];
        
        $hash =  password_hash($c->getSenha(), PASSWORD_BCRYPT, $options);
      
       
       $cep = preg_replace("/[^0-9]/","", $c->getCep());
       $cpf = preg_replace("/[^0-9]/","", $c->getCpf());
       $telefone = preg_replace("/[^0-9]/","", $c->getTelefone());
       $celular = preg_replace("/[^0-9]/","", $c->getCelular());
       
       $data = $c->getDataNasc();
       $dataNascimento = date('Y-d-m H:i:s', strtotime($data));
    
        $stmt->bind_param("ssisiississssis", 
                                            $c->getNome(), // s
                                            $c->getEmail(), //s
                                            $cpf,  //i
                                            $dataNascimento, //s
                                            $telefone, //i
                                            $celular, //i
                                            $c->getSexo(),  //s
                                            $c->getEndereco(), //s
                                            $c->getNumero(),    //i
                                            $c->getApartamento(), //s
                                            $c->getBairro(), //s 
                                            $c->getCidade(), //s
                                            $c->getEstado(), //s
                                            $cep,            //i
                                            $hash            //s
                                            //$c->getSenha() 
                                            );
        //----------------------------------------------
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
      
    }
    
    
    //listar = traz todos os cadastros
    public function getCadastros(){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("SELECT * FROM cadastro");
        $stmt->execute();
        
        $arr = mysqli_fetch_all(mysqli_stmt_get_result($stmt));
        
        $cadastros = array();
        
        foreach($arr as $a){
            $cadastros[] = new CadastroModel($a[0],$a[1],$a[2],$a[3],$a[4],$a[5],$a[6],$a[7],$a[8],$a[9],$a[10],$a[11],$a[12],$a[13],$a[14],$a[15]);
        }
        return $cadastros;
    }
    
    public function deleteCadastro($id){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("DELETE FROM cadastro WHERE cd_cadastro=?");
        
        $stmt->bind_param("i",$id);
        
        if (!$stmt->execute()) {
            echo "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
    }
    
    public function getCadastro($id){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("SELECT * FROM cadastro WHERE cd_cadastro=?");
        
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id, $nome, $email, $cpf, $dataNascimento, $telefone,
                           $celular, $sexo, $endereco, $numero, $apartamento,
                           $bairro, $cidade, $estado, $cep, $senha);
        $stmt->fetch();
        
        $cadastro = new CadastroModel($id, $nome, $email, $cpf, $dataNascimento, $telefone,
                                    $celular, $sexo, $endereco, $numero, $apartamento,
                                    $bairro, $cidade, $estado, $cep, $senha);
        return $cadastro;
    }
    
    public function updateCadastro(CadastroModel $c){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
      
        $stmt = $mysqli->prepare("UPDATE cadastro SET nm_nome = ?, 
                                                      ds_email = ?,
                                                      cd_cpf = ?, 
                                                      dt_nascimento = ?,
                                                      cd_telefone = ?,
                                                      cd_celular = ?,
                                                      sg_sexo = ?,
                                                      ds_endereco = ?,
                                                      cd_numero = ?,
                                                      ds_apartamento = ?,
                                                      ds_bairro = ?,
                                                      ds_cidade = ?,
                                                      sg_estado = ?,
                                                      cd_cep = ?,
                                                      ds_senha = ?
                                                      WHERE cd_cadastro =?");
          /*                                            
        if(senha diferente){
                                                      
            $hash = password_hash($c->getSenha(), PASSWORD_DEFAULT);
        
        } 
        */
        
       $cep = preg_replace("/[^0-9]/","", $c->getCep());
       $cpf = preg_replace("/[^0-9]/","", $c->getCpf());
       $telefone = preg_replace("/[^0-9]/","", $c->getTelefone());
       $celular = preg_replace("/[^0-9]/","", $c->getCelular());
       
       $data = $c->getDataNasc();
       $dataNascimento = date('Y-d-m H:i:s', strtotime($data));
                                                      
        
        $stmt->bind_param("ssisiississssisi",
                          $c->getNome(), //s
                          $c->getEmail(), //s
                          $cpf, //i 
                          $dataNascimento, //s
                          $telefone,//i
                          $celular,//i
                          $c->getSexo,     //s
                          $c->getEndereco, //s
                          $c->getNumero, //i
                          $c->getApartamento, //s
                          $c->getBairro, //s
                          $c->getCidade, //s
                          $c->getEstado, //s
                          $cep, //i
                          $c->getSenha, //s
                          $c->getId());//i
       
       
       if (!$stmt->execute()) {
            echo "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        

    }
    
    
   

   
 
    
    
}

?>