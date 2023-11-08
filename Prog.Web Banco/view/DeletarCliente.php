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
        <input type="submit" name="submit" id="submit" value="deletar">Deletar Cliente</button>
    </form>
</body>
</html>