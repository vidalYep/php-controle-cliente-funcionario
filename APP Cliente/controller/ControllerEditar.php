<?php
require_once("../model/banco.php");

class editarController {

    private $editar;
    private $cpf;
    private $nome;
    private $telefone;
    private $endereco;

    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaCliente($id);
        $this->cpf         =$row['cpf'];
        $this->nome        =$row['nome'];
        $this->telefone   =$row['telefone'];
        $this->endereco        =$row['endereco'];

    }
    public function editarFormulario($cpf,$nome,$telefone,$endereco,$id){
        if($this->editar->updateCliente($cpf,$nome,$telefone,$endereco,$id) == TRUE){
            echo "<script>alert('Cliente editado com sucesso!');document.location='../view/read.php'</script>";
        }else{
            echo "<script>alert('Erro ao editar cliente!');history.back()</script>";
        }
    }
    public function getCPF(){
        return $this->cpf;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getEndereco(){
        return $this->endereco;
    }


}
$id = filter_input(INPUT_GET, 'id');

$editar = new editarController($id);

if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['cpf'],$_POST['nome'],$_POST['telefone'],$_POST['endereco'],$_POST['id']);
}
?>
