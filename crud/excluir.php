<?php
    include "conexao.php";

    $id = $_GET['id'];

    $sql = $conexao->prepare('DELETE FROM roupas WHERE id = ?');
    $sql->bind_param("s", $id);
    $sql->execute();
    header("Location: index.php");

?>