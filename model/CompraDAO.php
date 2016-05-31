<?php

class CompraDAO{
                          //nome da classe Model
    public function insert(CompraModel $c){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
         
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        
        $stmt = $mysqli->prepare("INSERT INTO compra(nome,preco,imagem) VALUES (?,?,?)");
        
        //Mudar aqui de acordo com a aula de seguranca
         $stmt->bind_param("sss",$c->getNome(),$c->getPreco(),$c->getImagem());
        
        //----------------------------------------------
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
    }
    
    public function getCompra($id){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("SELECT * FROM compra WHERE id=?");
        
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id, $nome,  $preco,  $imagem);
        $stmt->fetch();
        
        $compra = new CompraModel($id, $nome, $preco, $imagem);
        return $compra;
    }
    
    
    public function updateCompra($id){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("PUT INTO compra(nome, preco,imagem) VALUES (?,?,?,?)");
        
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id, $nome,  $preco,  $imagem);
        $stmt->fetch();
        
        $compra = new CompraModel($id, $nome,  $preco,  $imagem);
        return $compra;
    }


    public function deleteCompra($id){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("DELETE * FROM compra WHERE id=?");
        
        $stmt->bind_param("i",$id);
        
        if (!$stmt->execute()) {
            echo "Erro: (" . $stmt->error . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
    }


    public function getAllCompra($id){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("SELECT * FROM compra");
        
        $stmt->bind_param("i",$_POST["id"]);
        $stmt->execute();
        $stmt->fetch();
        
        $row = $stmt->get_result()->fetch_all();//pega todos os resultados e joga num vetor
        foreach($row as $Compra){
            return $e[1];
        }
    }
        
   
 
    
    
}

?>