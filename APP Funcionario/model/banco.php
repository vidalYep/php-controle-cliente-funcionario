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

    public function setFuncionario($codigo,$nome,$telefone,$cargo){
        $stmt = $this->mysqli->prepare("INSERT INTO funcionario (`codigo`, `nome`, `telefone`, `cargo`) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss",$codigo,$nome,$telefone,$cargo);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getFuncionario(){
        $result = $this->mysqli->query("SELECT * FROM funcionario");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteFuncionario($id){
        if($this->mysqli->query("DELETE FROM `funcionario` WHERE `codigo` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaFuncionario($id){
        $result = $this->mysqli->query("SELECT * FROM funcionario WHERE codigo ='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateFuncionario($codigo,$nome,$telefone,$cargo,$id){
        $stmt = $this->mysqli->prepare("UPDATE `funcionario` SET `codigo` = ?, `nome`=?, `telefone`=?, `cargo`=?  WHERE `codigo` = ?");
        $stmt->bind_param("sssss",$codigo,$nome,$telefone,$cargo,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>
