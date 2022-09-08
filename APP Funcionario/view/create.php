<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>

<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #e3f2fd;">
Cadastro Funcionario
</nav>

<div class="container">
  <div class="text-center mb-4">
    <h3>Adicionar Novo Funcionario</h3>
    <p class="text-muted">Preencha o Formulário </p>
  </div>
</div>


<div class="container d-flex justify-content-center">
  <form action="../controller/ControllerCadastro.php" method="POST"> 

    <div class="row">


        <div class="mb-3">
        <label for="telefone" class="form-label">Código:</label>
        <input type="tel" class="form-control" id="codigo" name="codigo" 
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
        <label for="telefone" class="form-label">Cargo:</label>
        <input type="tel" class="form-control" id="cargo" name="cargo" 
        placeholder="Ex: Rua vermelha - 500" required>
        </div>

    </div>


    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="read.php" class="btn btn-danger">Cancelar</a>
    
  </form>


</div>
</body>

</html>
