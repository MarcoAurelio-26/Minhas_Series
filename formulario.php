<?php
    
    $titulo_pagina = "Formulário";
    require("cabecalho.php");

?>

<form method="POST" action="inserir_serie.php">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome">
    </div>

    <div class="mb-3">  
        <label for="poster" class="form-label">Poster:</label>
        <input type="url" class="form-control" id="poster" name="poster">
    </div>

    <div class="mb-3">
        <label for="sinopse" class="form-label">Sinopse:</label>
        <textarea class="form-control" id="sinopse" name="sinopse" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-warning">Cancelar</button>
    </div>

</form>

<?php
    
    require("rodape.php");

?>