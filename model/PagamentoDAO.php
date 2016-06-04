<?php

class PagamentoDAO{
                          //nome da classe Model
    public function insert(PagamentoModel $f){
        
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
         
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        
        $stmt = $mysqli->prepare("INSERT INTO pagamento(credito, nome_titular, validade, seguranca, bandeira) VALUES (?,?,?,?,?)");
        

        $stmt->bind_param("isiis",$f->getCredito(),$f->getNome_titular(), $f->getValidade(), $f->getSeguranca(), $f->getBandeira());
        
        //----------------------------------------------
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
    }
    
   //listar
    public function getPagamento(){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("SELECT * FROM pagamento");
        $stmt->execute();
        
        $arr = mysqli_fetch_all(mysqli_stmt_get_result($stmt));
        
        $pagamento = array();
        
        foreach($arr as $a){
            $pagamento[] = new PagamentoModel($a[0],$a[1],$a[2],$a[3],$a[4], $a[5], $a[6]);
        }
        return $pagamento;
    }
    
    public function deletePagamento($id){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("DELETE FROM pagamento WHERE id=?");
        
        $stmt->bind_param("i",$id);
        
        if (!$stmt->execute()) {
            echo "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
    }
    
    
    
    //vai selecionar todos os contatos
    public function getPagamentos($id){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        
        $stmt = $mysqli->prepare("SELECT * FROM pagamento WHERE id=?");
        
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id, $credito, $nome_titular, $validade, $seguranca, $bandeira);
        $stmt->fetch();
        
        $pagamento = new PagamentoModel($id, $credito, $nome_titular, $validade, $seguranca, $bandeira);
        return $pagamento;
    }
    
    //http://php.net/manual/pt_BR/mysqli-stmt.fetch.php
}

?>