<?php

//HEADER
include_once 'includes/header.php';
?>

<h3>Novo Cliente</h3>
<form action="php_action/create.php" method="POST">
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="nome" name="nome" class="form-control" id="nome">
  </div>
  <div class="mb-3">
    <label for="sobrenome" class="form-label">Sobrenome</label>
    <input type="sobrenome" name="sobrenome" class="form-control" id="sobrenome">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  <div class="mb-3">
    <label for="idade" class="form-label">Idade</label>
    <input type="idade" name="idade" class="form-control" id="idade">
  </div>
  <button type="submit" name="btn-cadastrar" class="btn btn-primary">CADASTRAR</button>
  <a href="index.php" type="submit" class="btn btn-primary">LISTA DE CLIENTES</a>
</form>


<?php
//FOOTER
include_once 'includes/footer.php';