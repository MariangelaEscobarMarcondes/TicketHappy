<?php

class ContatoDAO{
                          //nome da classe Model
    public function insert(ContatoModel $c){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
         
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        
        $stmt = $mysqli->prepare("INSERT INTO contatos(nm_nomeCompleto,ds_email,ds_assunto,ds_mensagem) VALUES (?,?,?,?)");
        
        //Mudar aqui de acordo com a aula de seguranca
        $stmt->bind_param("ssss",$c->getNomeCompleto(),$c->getEmail(),$c->getAssunto(),$c->getMensagem());
        
        //----------------------------------------------
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
    }
    
    //vai selecionar todos os contatos
    public function getAllContatos(){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("SELECT * FROM contatos");
        
        //$stmt->bind_param("i",$_POST["id"]);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->fetch();
        
        $row = $stmt->get_result()->fetch_all();//pega todos os resultados e joga num vetor
        foreach($row as $Contato){
            return $e[1];
        }
    }
    
    public function updateContato($id){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("PUT INTO contatos(nm_nomeCompleto,ds_email,ds_assunto,ds_mensagem) VALUES (?,?,?,?)");
        
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id, $nomeCompleto, $email, $assunto, $mensagem);
        $stmt->fetch();
        
        $evento = new ContatoModel($id, $nomeCompleto, $email, $assunto, $mensagem);
        return $evento;
    }
    
    public function deleteContato($id){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("DELETE * FROM contatos WHERE id=?");
        
        $stmt->bind_param("i",$id);
        
        if (!$stmt->execute()) {
            echo "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
    }
   

   
 
    
    
}

?>