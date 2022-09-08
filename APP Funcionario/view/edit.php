<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>

<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #e3f2fd;">
Alterar dados do Funcionario
</nav>


<?php require_once("../controller/ControllerEditar.php");?>

<div class="container d-flex justify-content-center">
  <form action="../controller/ControllerEditar.php" method="POST" id="form" name="form" class="col-10"> 

    <div class="row">

      <div class="mb-3">
        <label for="id_id" class="form-label">Código:</label>
        <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $editar->getCodigo(); ?>">
      </div>

      <div class="mb-3">
        <label for="nome_id" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $editar->getNome(); ?>">
      </div>

      <div class="mb-3">
        <label for="telefone_id" class="form-label">Telefone:</label>
        <input type="tel" class="form-control" id="telefone" name="telefone" value="<?php echo $editar->getTelefone(); ?>">
      </div>

      <div class="mb-3">
        <label for="telefone_id" class="form-label">Cargo:</label>
        <input type="tel" class="form-control" id="cargo" name="cargo" value="<?php echo $editar->getCargo(); ?>">
      </div>

      <input type="hidden" name="id" value="<?php echo $editar->getCodigo();?>">
      
    </div>

    <input type="hidden" name="id" value="<?php echo $editar->getCodigo();?>">
    <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Salvar</button>
    <a href="read.php" class="btn btn-danger">Cancelar</a>
    
  </form>
</div>


   
</body>
</html>






