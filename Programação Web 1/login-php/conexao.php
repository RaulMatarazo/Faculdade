<?php
    // configuração padrão
    $host    = "localhost";
    $usuario = "root"; 
    $senha   = "";

    // configuração
    $banco   = "sistema_login";
    $conexao = new mysqli($host, $usuario, $senha, $banco); // cria um objeto de conexão (new) entre o site e o banco de dados

    // -> acessa propriedade da variável
    if ($conexao->connect_error) {
        die("Erro de conexão: " . $conexao->connect_error);
    } 
    // else {
    //     echo "Conexão realizada com sucesso!";
    // }
    




?>