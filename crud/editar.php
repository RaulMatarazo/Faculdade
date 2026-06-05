<?php
    include "conexao.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM roupas WHERE id = $id";

    $resultado = mysqli_query($conexao, $sql);

    $dados = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar roupa</title>
</head>

<body>
    <div class="container">
        <h1>Cadastro de Roupas</h1>
        <form action="atualizar.php" method="post">
            <input 
                type="text" 
                name='id' 
                value=<?php echo $dados['id']; ?>
            >
            <input 
                type="text" 
                name="nome" 
                placeholder="Nome da roupa" 
                value=<?php echo $dados['nome']; ?>
                required>
            <input 
                type="text" 
                name="tamanho" 
                placeholder="Tamanho" 
                value=<?php echo $dados['tamanho']; ?>
                required>
            <input 
                type="text" 
                name="cor" 
                placeholder="Cor" 
                value=<?php echo $dados['cor']; ?>
                required>
            <input 
                type="number" 
                name="preco" 
                placeholder="Preço" 
                value=<?php echo $dados['preco']; ?>
                required>
            <input
                type="text" 
                name="categoria" 
                placeholder="Categoria" 
                value=<?php echo $dados['categoria']; ?>
                required>
            <input type="submit" value="Atualizar">
        </form>
    </div>
</body>

</html>