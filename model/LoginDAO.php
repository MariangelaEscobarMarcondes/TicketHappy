<?php

class LoginDAO{
    
    /* ESTA SENDO INSERIDO NO CADASTRO */
    /*
                          //nome da classe Model
    public function insert(LoginModel $u){
        
         $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
         
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        
        $stmt = $mysqli->prepare("INSERT INTO cadastro(nome,login,senha) VALUES (?,?,?)");
        
        //Mudar aqui de acordo com a aula de seguranca
        $stmt->bind_param("sss",$u->getNome(),$u->getLogin(),$u->getSenha());
        
        //----------------------------------------------
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
    }
    */
    
    public function authUsuario($email, $senha){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("SELECT id FROM cadastro WHERE email=? and senha=?");
        
        $stmt->bind_param("ss",$email, $senha);
        
        $stmt->execute();
        $stmt->bind_result($id);
        $stmt->fetch();//vai popular as variaveis a partir do BD
        
        if($id > 0){
            //achou o usuario e o login e senha estao corretos
            return $id;
        }else{
            //usuario ou senha invalidos
            return false;
        }
    }
    
    public function getUsuario($id){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("SELECT * FROM cadastro WHERE id=?");
        
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id,$email, $senha);
        $stmt->fetch();
        
        $loginModel = new LoginModel($id,$email,$senha);
        return $loginModel;
    }
    
   
    
    
}

?>