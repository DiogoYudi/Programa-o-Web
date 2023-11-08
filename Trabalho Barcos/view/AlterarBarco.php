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
        <label for="nome">Modelo:</label>
        <input type="text" name="modelo" id="modelo" required><br>
        <label for="telefone">Fabricante:</label>
        <input type="text" name="fabricante" id="fabricante" required><br>
        <label for="telefone">Opcionais:</label>
        <input type="text" name="opcionais" id="opcionais" required><br>
        <label for="telefone">Cor:</label>
        <input type="text" name="cor" id="cor" required><br>
        <input type="submit" name="submit" id="submit" value="alterar">Alterar Barco</button>
    </form>
</body>
</html>