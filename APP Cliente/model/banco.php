<?php

require_once("../../conexao.php");

class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setCliente($cpf,$nome,$telefone,$endereco){
        $stmt = $this->mysqli->prepare("INSERT INTO cliente (`cpf`, `nome`, `telefone`, `endereco`) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss",$cpf,$nome,$telefone,$endereco);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getCliente(){
        $result = $this->mysqli->query("SELECT * FROM cliente");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteCliente($id){
        if($this->mysqli->query("DELETE FROM `cliente` WHERE `cpf` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaCliente($id){
        $result = $this->mysqli->query("SELECT * FROM cliente WHERE cpf ='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateCliente($cpf,$nome,$telefone,$endereco,$id){
        $stmt = $this->mysqli->prepare("UPDATE `cliente` SET `cpf` = ?, `nome`=?, `telefone`=?, `endereco`=?  WHERE `cpf` = ?");
        $stmt->bind_param("sssss",$cpf,$nome,$telefone,$endereco,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>
