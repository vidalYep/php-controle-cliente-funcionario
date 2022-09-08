<?php
require_once("../model/cadastro.php");

class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        $this->incluir();
    }

    private function incluir(){

        $this->cadastro->setCPF($_POST['cpf']);
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setTelefone($_POST['telefone']);
        $this->cadastro->setEndereco($_POST['endereco']);


        $result = $this->cadastro->incluir();

        if($result >= 1){
            echo "<script>alert('Cliente cadastrado com sucesso!');document.location='../view/read.php'</script>";
        }else{
            echo "<script>alert('Erro ao cadastrar cliente!');history.back()</script>";
        }
    }
}
new cadastroController();
