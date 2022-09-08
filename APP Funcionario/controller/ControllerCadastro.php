<?php
require_once("../model/cadastro.php");

class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        $this->incluir();
    }

    private function incluir(){

        $this->cadastro->setCodigo($_POST['codigo']);
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setTelefone($_POST['telefone']);
        $this->cadastro->setCargo($_POST['cargo']);


        $result = $this->cadastro->incluir();

        if($result >= 1){
            echo "<script>alert('Funcionario cadastrado com sucesso!');document.location='../view/read.php'</script>";
        }else{
            echo "<script>alert('Erro ao cadastrar Funcionario!');history.back()</script>";
        }
    }
}
new cadastroController();
