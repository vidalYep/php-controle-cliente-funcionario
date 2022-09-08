<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $codigo;
    private $nome;
    private $telefone;
    private $cargo;

    //Metodos Set
    public function setCodigo($string){
        $this->codigo = $string;
    }
    public function setNome($string){
        $this->nome = $string;
    }
    public function setTelefone($string){
        $this->telefone = $string;
    }
    public function setCargo($string){
        $this->cargo = $string;
    }

    //Metodos Get
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
 


    public function incluir(){
        return $this->setFuncionario($this->getCodigo(),$this->getNome(),$this->getTelefone(),$this->getCargo());
    }
}
?>
