<?php

class LoginDAO{
    
    
    public function authUsuario(LoginModel $l){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("SELECT cd_cadastro FROM cadastro WHERE ds_email=? and ds_senha=?");
        
        $stmt->bind_param("ss",$l->getEmail(), $l->getSenhaHash());
        
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
        
        $stmt = $mysqli->prepare("SELECT cd_cadastro, nm_nome FROM cadastro WHERE cd_cadastro=?");
        
        $stmt->bind_param("i",$id);
        $stmt->execute();
        //$stmt->bind_result($id,$email,$senhaHash);
        $stmt->bind_result($id,$nome);
        $stmt->fetch();
        
        //$loginModel = new LoginModel($id,$email,$senhaHash);
        $loginModel = new LoginModel($id,"",$nome,"");
        return $loginModel;
    }
    
   
    
    
}

?>