<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Barcos</title>
</head>
<body>
    <h1>CRUD de Barcos</h1>
    <h2>Alterar Barco</h2>
    <form action="../view/index.php" method="POST">
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" id="codigo" value="<?php echo $_GET['codigo']?>" required><br>
        <input type="submit" name="submit" id="submit" value="deletar">Deletar Barco</button>
    </form>
</body>
</html>