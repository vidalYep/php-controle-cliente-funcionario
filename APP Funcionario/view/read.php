<?php require_once("../controller/ControllerListar.php");?>
<!DOCTYPE html>
<html lang="pt-BR">

<?php include("head.php"); ?>

<body>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #e3f2fd;">
Controle Funcionario
</nav>

<div class="container">

<a href="create.php" class="btn btn-dark mb-5">Adicionar </a>
<a href= "../../index.php" class="btn btn-primary mb-5">Voltar</a>

</div>

<div class="mx-auto" style="width: 1200px;">
    <table class="table table-hover text-center">
            
        <thead class="table" style="background-color: #78c3fb;">
            <tr>
            <th scope="col">Código</th>
            <th scope="col">Nome </th>
            <th scope="col">Telefone</th>
            <th scope="col">cargo</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php new listarController();  ?>

        </tbody>
    </table>
</body>
</html>
