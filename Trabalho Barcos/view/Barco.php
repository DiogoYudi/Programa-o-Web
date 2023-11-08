<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Barcos</title>
</head>
<body>
    <h1>CRUD de Barcos</h1>
    <ul>
        <?php
        foreach($barco as $ba){ ?>
            <li><?php echo $ba['codigo'] ?> - <?=$ba['modelo']?> - <?=$ba['fabricante']?> - <?=$ba['opcionais']?> - <?=$ba['cor']?>
                <a href='../view/AlterarBarco.php?codigo=<?=$ba['codigo']?>'> [alterar] </a>
                <a href='../view/DeletarBarco.php?codigo=<?=$ba['codigo']?>'> [deletar] </a>
            </li>
        <?php
        }
        ?>
    </ul>

    <h2>Adicionar Novo Barco</h2>
    <form action="../view/index.php" method="POST">
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" id="codigo" required><br>
        <label for="nome">Modelo:</label>
        <input type="text" name="modelo" id="modelo" required><br>
        <label for="telefone">Fabricante:</label>
        <input type="text" name="fabricante" id="fabricante" required><br>
        <label for="telefone">Opcionais:</label>
        <input type="text" name="opcionais" id="opcionais" required><br>
        <label for="telefone">Cor:</label>
        <input type="text" name="cor" id="cor" required><br>
        <input type="submit" name="submit" id="submit" value="adicionar">Adicionar Barco</button>
    </form>
</body>
</html>