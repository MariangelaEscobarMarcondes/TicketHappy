<?php

class EventoDAO{
                          //nome da classe Model
    public function insert(EventoModel $e){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
         
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        
        $stmt = $mysqli->prepare("INSERT INTO eventos(nm_evento,nm_local,nm_cidade,nm_categoria,ds_texto,ds_data,ds_horario,ds_preco,ds_onde,imagem,ds_imagemFundo) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        
        //Mudar aqui de acordo com a aula de seguranca
        $stmt->bind_param("sssssssssss",$e->getEvento(),$e->getLocal(),$e->getCidade(),$e->getCategoria,$e->getTexto,$e->getData,$e->getHorario,$e->getPreco,$e->getOnde,$e->getImagem,$e->getImagemFundo);
        
        //----------------------------------------------
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
    }
    
    public function getEvento($id){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("SELECT * FROM eventos WHERE id=?");
        
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id, $evento, $local, $cidade, $categoria, $texto, $data, $horario, $preco, $onde, $imagem, $imagemFundo);
        $stmt->fetch();
        
        $evento = new EventoModel($id, $evento, $local, $cidade, $categoria, $texto, $data, $horario, $preco, $onde, $imagem, $imagemFundo);
        return $evento;
    }
    
    
    public function updateEvento($id){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("PUT INTO eventos(nm_evento,nm_local,nm_cidade,nm_categoria) VALUES (?,?,?,?)");
        
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id, $evento, $local, $cidade, $categoria, $texto, $data, $horario, $preco, $onde, $imagem, $imagemFundo);
        $stmt->fetch();
        
        $evento = new EventoModel($id, $evento, $local, $cidade, $categoria, $texto, $data, $horario, $preco, $onde, $imagem, $imagemFundo);
        return $evento;
    }


    public function deleteEvento($id){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("DELETE * FROM eventos WHERE id=?");
        
        $stmt->bind_param("i",$id);
        
        if (!$stmt->execute()) {
            echo "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
    }


    public function getAllEvento($id){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("SELECT * FROM eventos");
        
        $stmt->bind_param("i",$_POST["id"]);
        $stmt->execute();
        $stmt->fetch();
        
        $row = $stmt->get_result()->fetch_all();//pega todos os resultados e joga num vetor
        foreach($row as $Evento){
            return $e[1];
        }
    }
        
   
 
    
    
}

?>