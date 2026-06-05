<?php
    include "conexao.php";

    $nome      = $_POST['nome'];
    $tamanho   = $_POST['tamanho'];
    $cor       = $_POST['cor'];
    $preco     = $_POST['preco'];
    $categoria = $_POST['categoria'];
    $id        = $_POST['id'];

    $sql = $conexao->prepare("UPDATE roupas SET nome = ?, tamanho = ?, cor = ?, preco = ?, categoria = ? WHERE id = ?");
    $sql->bind_param("ssssss", $nome, $tamanho, $cor, $preco, $categoria, $id);
    $sql->execute();

    header("Location: index.php");
?>