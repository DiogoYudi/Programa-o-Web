<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex3</title>
</head>
<body>
    <form method="POST" action="processamento.php">
        <input type="number" name="inputNum" placeholder="Valor do produto">
        <input type="number" name="inputNum2" placeholder="Porcentagem de lucro">
        <input type="submit" value="Calcular">
    </form>
    <?php
        if(isset($_SESSION['Resultado']))
            echo "Custo = " . $_SESSION['Resultado'];
    ?>
</body>
</html>