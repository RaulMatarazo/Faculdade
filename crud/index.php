<?php
    include "conexao.php";
    $sql = "SELECT * FROM roupas ORDER BY id ASC";
    $resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de roupas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro de Roupas</h1>
        <form action="salvar.php" method="post">
            <input type="text"   name="nome"      placeholder="Nome da roupa" required>
            <input type="text"   name="tamanho"   placeholder="Tamanho"       required>
            <input type="text"   name="cor"       placeholder="Cor"           required>
            <input type="number" name="preco"     placeholder="Preço"         required>
            <input type="text"   name="categoria" placeholder="Categoria"     required>
            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Tamanho</th>
        <th>Cor</th>
        <th>Preço</th>
        <th>Categoria</th>
        <th>Data de Cadastro</th>
        <th>Ações</th>
    </tr>

    <?php while ($dados = mysqli_fetch_assoc($resultado)) : ?>

        <tr>
            <td><?php echo $dados['id'] ?></td>
            <td><?php echo $dados['nome'] ?></td>
            <td><?php echo $dados['tamanho'] ?></td>
            <td><?php echo $dados['cor'] ?></td>
            <td>
                R$ <?php echo $dados['preco'] ?>
            </td>
            <td><?php echo $dados['categoria'] ?></td>
            <td><?php echo $dados['data_cadastro'] ?></td>
            <td>
                <a class="editar" href="editar.php?id=<?= $dados['id'] ?>"> Editar</a>
                <a class="excluir" href="excluir.php?id=<?= $dados['id'] ?>" onclick="return confirm('Deseja excluir?')">Excluir</a>
            </td>
        </tr>

    <?php endwhile; ?>

</table>
</body>

</html>