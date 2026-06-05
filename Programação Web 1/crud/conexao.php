<?php
    $servidor = "localhost";
    $usuario  = "root";
    $senha    = "";
    $banco    = "loja_roupas";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    if (!$conexao){
        die("Erro ao se conectar ao banco de dados: " . mysqli_connect_error());
    }
?>