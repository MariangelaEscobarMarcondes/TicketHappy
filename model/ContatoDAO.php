<?php

class ContatoDAO{
                          //nome da classe Model
    public function insert(ContatoModel $c){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
         
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        
        $stmt = $mysqli->prepare("INSERT INTO contatos(nm_nomeCompleto,ds_email,ds_assunto,ds_mensagem) VALUES (?,?,?,?)");
       
        $stmt->bind_param("ssss",$c->getNomeCompleto(),$c->getEmail(),$c->getAssunto(),$c->getMensagem());
        
        //----------------------------------------------
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
    }
    
    //listar = traz todos os contatos
    public function getContatos(){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("SELECT * FROM contatos");
        $stmt->execute();
        
        $arr = mysqli_fetch_all(mysqli_stmt_get_result($stmt));
        
        $contatos = array();
        
        foreach($arr as $a){
            $contatos[] = new ContatoModel($a[0],$a[1],$a[2],$a[3],$a[4]);
        }
        return $contatos;
    }
    
    public function deleteContato($id){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("DELETE FROM contatos WHERE id_contato=?");
        
        $stmt->bind_param("i",$id);
        
        if (!$stmt->execute()) {
            echo "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
    }
    
    public function getContato($id){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("SELECT * FROM contatos WHERE id_contato=?");
        
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id, $nomeCompleto, $email, $assunto, $mensagem);
        $stmt->fetch();
        
        $contato = new ContatoModel($id, $nomeCompleto, $email, $assunto, $mensagem);
        return $contato;
    }
    
    public function updateContato(ContatoModel $c){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
      
        $stmt = $mysqli->prepare("UPDATE contatos SET nm_nomeCompleto = ?,
                                                      ds_email = ?,
                                                      ds_assunto = ?,
                                                      ds_mensagem = ?
                                                      WHERE id_contato =?");
        
        $stmt->bind_param("ssssi",$c->getNomeCompleto(),$c->getEmail(),$c->getAssunto(),$c->getMensagem(),$c->getId());
       
       
       if (!$stmt->execute()) {
            echo "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        
        /*
        $stmt->bind_result($id, $nomeCompleto, $email, $assunto, $mensagem);
        $stmt->fetch();
        
        $contato = new ContatoModel($id, $nomeCompleto, $email, $assunto, $mensagem);
        return $contato;
        */
        
        /*
        $stmt = $mysqli->prepare("UPDATE movies SET filmName = ?,    filmDescription = ?,    filmImage = ?,     filmPrice = ?,     filmReview = ?    WHERE filmID = ?");
$stmt->bind_param('sssdii',
   $_POST['filmName'],
   $_POST['filmDescription'],
   $_POST['filmImage'],
   $_POST['filmPrice'], 
   $_POST['filmReview'],
   $_POST['filmID']);
$stmt->execute(); 
$stmt->close();
*/
    }
    
    
    
    //vai selecionar todos os contatos
    public function getAllContatos(){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("SELECT * FROM contatos"); //Prepara uma declaração SQL para execução
        
        //$stmt->bind_param("i",$_POST["id"]); //Passa variáveis para um preparado comando como parâmetros
       
        $stmt->execute(); //Executa uma preparada query
        $stmt->bind_result($id, $nomeCompleto, $email, $assunto, $mensagem); //Passa variáveis para um preparado comando por resultado armazenado
        
        //$stmt->fetch(); //Obtém resultados de um preparado comando e os coloca nas determinadas variáveis
        
        while ($stmt->fetch()) {
            
        }
            
            
        //erro
        $row = $stmt->get_result()->fetch_all();//pega todos os resultados e joga num vetor
        
        foreach($row as $Contato){
            return $c[1];
        }
    }
    
    //http://php.net/manual/pt_BR/mysqli-stmt.fetch.php
    
    
    
   
   

   
 
    
    
}

?>