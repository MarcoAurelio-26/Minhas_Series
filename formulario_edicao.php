<?php
    
    $titulo_pagina = "Formulário de alteração";
    require("cabecalho.php");
    require("conexao.php");

    $id = filter_input(INPUT_GET, "id");

    $sql = "select nome, poster, sinopse from series where id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    $row = $stmt->fetch();

    /*
    echo "<pre>";
    var_dump($row);
    echo "</pre>";

    --arrays "nome" e [0]--
    echo $row["nome"];
    echo $row[0];

    */

?>

<form method="POST" action="alterar_serie.php">

    <input type="hidden" id="id" name="id" value="<?= $id ?>">

    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" 
        value="<?= $row["nome"] ?>">
    </div>

    <div class="mb-3">  
        <label for="poster" class="form-label">Poster:</label>
        <input type="url" class="form-control" id="poster" name="poster"
        value="<?= $row["poster"] ?>">
    </div>

    <div class="mb-3">
        <label for="sinopse" class="form-label">Sinopse:</label>
        <textarea class="form-control" id="sinopse" name="sinopse" rows="3"><?= $row["sinopse"] ?>
        </textarea>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-warning">Resetar</button>
    </div>

</form>

<?php
    
    require("rodape.php");

?>