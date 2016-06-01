<?php

class ContatoDAO{
                          //nome da classe Model
    public function insert(ContatoModel $c){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
         
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        
        $stmt = $mysqli->prepare("INSERT INTO contatos(nm_completo,ds_email,ds_assunto,ds_mensagem) VALUES (?,?,?,?)");
        
        //Mudar aqui de acordo com a aula de seguranca
        $stmt->bind_param("ssss",$c->getNomeCompleto(),$c->getEmail(),$c->getAssunto(),$c->getMensagem);
        
        //----------------------------------------------
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
    }
    
   

   
 
    
    
}

?>