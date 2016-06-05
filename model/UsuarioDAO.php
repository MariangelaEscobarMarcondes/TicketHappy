<?php


//para entrar no mysql
// https://ticket-happy-mariangela.c9users.io/phpmyadmin/
//  Username: mariangela
/*
    $dbc = mysqli_connect("127.0.0.1", "mariangela", "", "ticketHappy") or die('erro ao conectar');
    $query = "insert into cadastro(nome, login, senha) values ('$nome','$login', '$senha')";
    $data = mysqli_query($dbc, $query) or die ('erro ao submeter ao banco de dados');
    mysqli_close($dbc);
    */
class UsuarioDAO{
                          //nome da classe Model
    public function insert(UsuarioModel $u){
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
    
    public function getUsuario($id){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        $stmt = $mysqli->prepare("SELECT * FROM cadastro WHERE id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id,$nome, $login, $senha);
        $stmt->fetch();
        $usuario = new UsuarioModel($id,$nome,$login,$senha);
        return $usuario;
    }
    
    public function authUsuario($login, $senha){
        $mysqli = new mysqli("127.0.0.1", "mariangela", "", "ticketHappy");
        $stmt = $mysqli->prepare("SELECT id FROM cadastro WHERE nome=? and senha=?");
        $stmt->bind_param("ss",$login, $senha);
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
    
    
}

?>