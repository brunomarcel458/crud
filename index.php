<?php

//HEADER
include_once 'includes/header.php';
?>
<h3>Novo Cliente</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Email</th>
      <th scope="col">Idade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Bruno</th>
      <td>Marcel</td>
      <td>brunomarcel@outlook.com</td>
      <td>24</td>
      <td><a class="btn btn-primary" href="#" role="button">REMOVER</a></td>
      <td><a class="btn btn-primary" href="#" role="button">EDITAR</a></td>
    </tr>
  </tbody>
</table>


<a class="btn btn-primary" href="adicionar.php" role="button">ADICIONAR CLIENTE</a>

<?php
//FOOTER
include_once 'includes/footer.php';