<?php
//CONEXÃO
include_once 'php_action/db_connect.php';
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
    <?php
    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($connect, $sql);
    while($dados = mysqli_fetch_array($resultado)):
    ?>
    <tr>
      <th scope="row"><?php echo $dados['nome'] ?></th>
      <td><?php echo $dados['sobrenome'] ?></td>
      <td><?php echo $dados['email'] ?></td>
      <td><?php echo $dados['idade'] ?></td>
      <td><a class="btn btn-primary" href="#" role="button">REMOVER</a></td>
      <td><a class="btn btn-primary" href="#" role="button">EDITAR</a></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>


<a class="btn btn-primary" href="adicionar.php" role="button">ADICIONAR CLIENTE</a>

<?php
//FOOTER
include_once 'includes/footer.php';