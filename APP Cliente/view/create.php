<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>

<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #e3f2fd;">
Cadastro Clientes
</nav>

<div class="container">
  <div class="text-center mb-4">
    <h3>Adicionar Novo Cliente</h3>
    <p class="text-muted">Preencha o Formulário </p>
  </div>
</div>


<div class="container d-flex justify-content-center">
  <form action="../controller/ControllerCadastro.php" method="POST"> 

    <div class="row">


        <div class="mb-3">
        <label for="telefone" class="form-label">CPF:</label>
        <input type="tel" class="form-control" id="cpf" name="cpf" 
        placeholder="Ex: 000.000.000-00" required>
        </div>


        <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" 
        placeholder="ex: josé da silva" required>
        </div>

        <div class="mb-3">
        <label for="telefone" class="form-label">Telefone:</label>
        <input type="tel" class="form-control" id="telefone" name="telefone" 
        placeholder="Ex: 31 98888-0000" required>
        </div>

        <div class="mb-3">
        <label for="telefone" class="form-label">Endereço:</label>
        <input type="tel" class="form-control" id="endereco" name="endereco" 
        placeholder="Ex: Rua vermelha - 500" required>
        </div>

    </div>


    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="read.php" class="btn btn-danger">Cancelar</a>
    
  </form>


</div>
</body>

</html>
