<?php
require_once("../model/banco.php");
class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getCliente();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['cpf'] ."</th>";
            echo "<td>".$value['nome'] ."</td>";
            echo "<td>".$value['telefone'] ."</td>";
            echo "<td>".$value['endereco'] ."</td>";

            echo "<td class=\"d-flex justify-content-around\"><a class='btn btn-warning' href='edit.php?id=".$value['cpf']."'>Editar</a>
            <a class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['cpf']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

