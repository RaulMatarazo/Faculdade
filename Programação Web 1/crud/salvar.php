<?php
    include "conexao.php";
    $nome      = $_POST['nome'];
    $tamanho   = $_POST['tamanho'];
    $cor       = $_POST['cor'];
    $preco     = $_POST['preco'];
    $categoria = $_POST['categoriaaaaaa'];

    $sql = $conexao->prepare("INSERT INTO roupas (nome, tamanho, cor, preco, categoria) VALUES (?, ?, ?, ?, ?)");
    $sql->bind_param("sssss", $nome, $tamanho, $cor, $preco, $categoria);
    $sql->execute();

    header("Location: index.php");

    
?>