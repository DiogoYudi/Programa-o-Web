<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Usuários</title>
</head>
<body>
    <h1>CRUD de Usuários</h1>
    <ul>
        <?php
        foreach($clientes as $cli){ ?>
            <li><?php echo $cli['nome'] ?> - <?=$cli['codigo']?> - <?=$cli['telefone']?>
                <a href='editarUsuario.php?id=<?=$cli['codigo']?>'> [alterar] </a>
                <a href='excluirUsuario.php?id=<?=$cli['codigo']?>'> [alterar] </a>
            </li>
        <?php
        }
        ?>
    </ul>

    <h2>Adicionar Novo Usuário</h2>
    <form action="adicionarUsuario.php" method="POST">
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" id="codigo" required><br>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" required><br>
        <button type="submit">Adicionar Usuário</button>
    </form>
</body>
</html>