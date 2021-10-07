<?php
    
    $titulo_pagina = "Inserir Série";
    require("cabecalho.php");

    /* 
    1. Estabelecer conexão com o banco
    */

    require("conexao.php");

    /*
    2. Receber as variaveis enviadas por POST
    */

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
    3. Criar um comando SQL
    */

    $sql = "insert into series (nome, poster, sinopse) values(?, ?, ?)";

    /*
    4. Executar o comando SQL
    */

    $stmt = $conn->prepare($sql);
    $result = $stmt->execute([$nome, $poster, $sinopse]);

    /*
    5. Testar o resultado e apresentar uma mensagem ao usuário
    */

    if($result == true){
    ?>
        <div class="alert alert-success">
            Dados enviados e gravados com sucesso!
        </div>
    <?php

    }else{
    ?>
        <div class="alert alert-success">
            Erro ao efetuar a gravação
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
        <a class="btn btn-primary" href="formulario.php">Voltar ao formulário</a>
    </p>
    
<?php
    
    require("rodape.php");

?>