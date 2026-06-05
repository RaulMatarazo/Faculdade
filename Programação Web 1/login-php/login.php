<?php
    session_start(); // inicia uma sessão logado

    include("conexao.php");

    $usuario = trim(($_POST["usuario"]));
    $senha   = ($_POST["senha"]);

    $stmt = $conexao->prepare("SELECT id, usuario, senha FROM tb_usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();

    $resultado = $stmt->get_result();
    if ($resultado->num_rows === 1) {
        $dados = $resultado->fetch_assoc(); // array associativo -> chave/valor
        if (password_verify($senha, $dados['senha'])) {
            $_SESSION['usuario'] = $dados['usuario'];
            header('Location: painel.php');
        }
    }

    echo "Usuário ou senha inválidos";
?>