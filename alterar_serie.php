<?php
    
    $titulo_pagina = "Alterar Série";
    require("cabecalho.php");

    /* 
    1. Estabelecer conexão com o banco
    */

    require("conexao.php");

    /*
    2. Receber as variaveis enviadas por POST
    */

    $id = filter_input(INPUT_POST, "id");
    $nome = filter_input(INPUT_POST, "nome");
    $poster = filter_input(INPUT_POST, "poster");
    $sinopse = filter_input(INPUT_POST, "sinopse");

    /*
    Testano as variables.

    echo "<pre></pre>";
    echo "var nome: $nome<br>";
    echo "var poster: $poster<br>";
    echo "var sinopse: $sinopse<br>";
    echo "<pre></pre>";
    */ 

    /*
    3. Criar um comando SQL UPDATE
    */

    $sql = "update series set nome = ? , poster = ?, sinopse = ? where id = ?";

    /*
    4. Executar o comando SQL
    */

    $stmt = $conn->prepare($sql);
    $result = $stmt->execute([$nome, $poster, $sinopse,$id]);

    /*
    5. Testar o resultado e apresentar uma mensagem ao usuário
    */

    if($result == true){
    ?>
        <div class="alert alert-success">
            Dados alterados com sucesso!
        </div>
    <?php

    }else{
    ?>
        <div class="alert alert-success">
            Erro ao efetuar a alteração!
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