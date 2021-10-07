<?php

    $titulo_pagina = "Listagem";
    require("cabecalho.php");

    require("conexao.php");

    $sql = "select id, nome, poster, sinopse from series order by id";

    $stmt = $conn->query($sql);


?>

<div class="table-responsive">
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Pôster</th>
      <th scope="col">Sinopse</th>
      <th scope="col" colspan="2"></th>
    </tr>
  </thead>
  <tbody>

    <?php
    while($row = $stmt->fetch()){

        $id = $row["id"];
        $nome = $row["nome"];
        $poster = $row["poster"];
        $sinopse = $row["sinopse"];
    ?>

    <tr>
      <th><?= $id ?></th>
      <td><?= $nome ?></td>
      <td><?= $poster ?></td>
      <td><?= $sinopse ?></td>

      <td>
          <a href="formulario_edicao.php?id=<?= $id ?>" class="btn-sm btn-warning text-decoration-none">
              Editar
          </a>
      </td>

      <td>
        <a href="excluir.php?id=<?= $id ?>" class="btn-sm btn-danger text-decoration-none" 
          onclick="if(!confirm('Tem certeza que deseja excluir esse item?')) return false;">
              Excluir
          </a>
          
      </td>
    </tr>

    <?php
    }
    ?>  

  </tbody>
</table>
</div>

<?php

    require("rodape.php");

?>