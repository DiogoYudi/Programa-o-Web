<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2</title>
</head>
<body>
    <form method="POST" action="processamento.php">
        <input type="number" name="inputNum" placeholder="Insira um número">
        <input type="submit" value="Calcular">
    </form>
    <?php
        if(isset($_SESSION['Resultado']))
            echo "r = " . $_SESSION['Resultado'];
    ?>
</body>
</html>