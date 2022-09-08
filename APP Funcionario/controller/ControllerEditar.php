<?php
require_once("../model/banco.php");

class editarController {

    private $editar;
    private $codigo;
    private $nome;
    private $telefone;
    private $cargo;

    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaFuncionario($id);
        $this->codigo         =$row['codigo'];
        $this->nome        =$row['nome'];
        $this->telefone   =$row['telefone'];
        $this->cargo        =$row['cargo'];

    }
    public function editarFormulario($codigo,$nome,$telefone,$cargo,$id){
        if($this->editar->updateFuncionario($codigo,$nome,$telefone,$cargo,$id) == TRUE){
            echo "<script>alert('Funcionario editado com sucesso!');document.location='../view/read.php'</script>";
        }else{
            echo "<script>alert('Erro ao editar Funcionario!');history.back()</script>";
        }
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getCargo(){
        return $this->cargo;
    }


}
$id = filter_input(INPUT_GET, 'id');

$editar = new editarController($id);

if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['codigo'],$_POST['nome'],$_POST['telefone'],$_POST['cargo'],$_POST['id']);
}
?>
