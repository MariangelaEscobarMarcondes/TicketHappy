<?php

class EventoDAO{
                          //nome da classe Model
    public function insert(EventoModel $e){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
         
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        
        $stmt = $mysqli->prepare("INSERT INTO Eventos(nm_evento,vl_ingresso,qt_totalIngresso, ds_categoria) VALUES (?,?,?,?)");
       
        $stmt->bind_param("sdis",$e->getEvento(),$e->getValor(),$e->getQuantidade(), $e->getCategoria());
        
        //----------------------------------------------
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
    }
    
   
    public function getEventos(){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("SELECT * FROM Eventos");
        $stmt->execute();
        
        $arr = mysqli_fetch_all(mysqli_stmt_get_result($stmt));
        
        $eventos = array();
        
        foreach($arr as $a){
            $eventos[] = new EventoModel($a[0],$a[1],$a[2],$a[3],$a[4]);
        }
        return $eventos;
    }
    
    public function deleteEvento($id){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("DELETE FROM Eventos WHERE id_evento=?");
        
        $stmt->bind_param("i",$id);
        
        if (!$stmt->execute()) {
            echo "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
    }
    
    public function getEvento($id){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("SELECT * FROM Eventos WHERE id_evento=?");
        
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id, $evento, $valor, $quantidade, $categoria);
        $stmt->fetch();
        
        $evento = new EventoModel($id, $evento, $valor, $quantidade, $categoria);
        return $evento;
    }
    
    public function updateEvento(EventoModel $e){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
      
        $stmt = $mysqli->prepare("UPDATE Eventos SET nm_evento = ?,
                                                      vl_ingresso = ?,
                                                      qt_totalIngresso = ?,
                                                      ds_categoria = ?
                                                      WHERE id_evento =?");
        
        $stmt->bind_param("sdisi",$e->getEvento(),$e->getValor(),$e->getQuantidade(), $e->getCategoria(), $e->getId());
       
       
       if (!$stmt->execute()) {
            echo "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
    }
    
 
   
    
    
    
   
   

   
 
    
    
}

?>