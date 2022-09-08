<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $cpf;
    private $nome;
    private $telefone;
    private $endereco;

    //Metodos Set
    public function setCPF($string){
        $this->cpf = $string;
    }
    public function setNome($string){
        $this->nome = $string;
    }
    public function setTelefone($string){
        $this->telefone = $string;
    }
    public function setEndereco($string){
        $this->endereco = $string;
    }

    //Metodos Get
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
 


    public function incluir(){
        return $this->setCliente($this->getCPF(),$this->getNome(),$this->getTelefone(),$this->getEndereco());
    }
}
?>
