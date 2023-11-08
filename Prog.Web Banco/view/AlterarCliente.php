<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Usuários</title>
</head>
<body>
    <?php
        $codigo = $_GET["codigo"];
    ?>
    <h1>CRUD de Usuários</h1>
    <h2>Alterar Cliente</h2>
    <form action="../view/index.php" method="POST">
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" id="codigo" value="<?php echo $codigo?>" required><br>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" required><br>
        <input type="submit" name="submit" id="submit" value="alterar">Alterar Cliente</button>
    </form>
</body>
</html>