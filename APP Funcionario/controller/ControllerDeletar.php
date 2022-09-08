<?php
require_once("../model/banco.php");
class deleta {
    private $deleta;

    public function __construct($id){
        $this->deleta = new Banco();
        if($this->deleta->deleteFuncionario($id)== TRUE){
            echo "<script>alert('Funcionario deletado com sucesso!');document.location='../view/read.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar Funcionario!');history.back()</script>";
        }
    }
}
new deleta($_GET['id']);
?>
