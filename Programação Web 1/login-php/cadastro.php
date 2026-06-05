<?php
    // inclusão de arquivo criado
    include("conexao.php");

    $usuario = "admin2";
    $senha   = "123";

    $hash = password_hash($senha, PASSWORD_DEFAULT); // criptografar senha

    $stmt = $conexao->prepare("INSERT INTO tb_usuarios (usuario, senha) VALUES (?, ?)");
    $stmt->bind_param('ss', $usuario,  $hash); // insere os parâmetros na interrogração (i = integer, d = double, s = string, b = blob)

    if ($stmt->execute()){
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Não foi possível cadastrar o usuário";
    }



    

?>