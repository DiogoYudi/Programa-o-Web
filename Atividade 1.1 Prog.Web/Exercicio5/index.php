<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex5</title>
</head>
<body>
    <form method="POST" action="processamento.php">
        <input type="number" name="inputNum" placeholder="Montante financiado">
        <input type="number" name="inputNum2" placeholder="Juros financiamento">
        <input type="number" name="inputNum3" placeholder="Parcela">
        <input type="submit" value="Calcular">
    </form>
    <?php
        if(isset($_SESSION['Resultado']))
            echo "Multa = " . $_SESSION['Resultado'];
    ?>
</body>
</html>