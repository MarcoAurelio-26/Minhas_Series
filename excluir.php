<?php

    $titulo_pagina = "Excluir série";
    require("cabecalho.php");
    require("conexao.php");


    $id = filter_input(INPUT_GET, "id");

    $sql = "delete from series where id = ?";

    $stmt = $conn->prepare($sql);
    $result = $stmt->execute([$id]);

        if($result == true){
    ?>
        <div class="alert alert-success">
            Registro excluido com sucesso!
        </div>
    <?php

    }else{
    ?>
        <div class="alert alert-success">
            Erro ao efetuar a exclusão
            <p>
                <?php
                echo $stmt->error;
                ?>
            </p>
        </div>
    <?php
    }    

?>

    <p>
        <a class="btn btn-primary" href="listagem.php">Voltar a listagem</a>
    </p>



<?php

    require("rodape.php");

?>