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
        <input type="text" name="inputNum2" placeholder="Juros financiamento">
        <input type="number" name="inputNum3" placeholder="Parcela">
        <input type="submit" value="Calcular">
    </form>
<table>
    <thead>
        <tr>
            <th> Parcela </th>
            <th> Vlr Parcela </th>
            <th> Amortização </th>
            <th> Juros </th>
            <th> Sdo Devedor </th>
        </tr>
    </thead>
    <tbody>
            <?php
                if(isset($_SESSION['Resultado'])){
                    echo "<tr>";
                    foreach($_SESSION['Resultado'] as $row){
                        foreach($row as $col){
                            echo "<td>" . $col . "</td>";
                        }
                    echo "</tr>";
                    }
                }
            ?>
        </tbody>
    </tbody>
</table>
<?php
    if(isset($_SESSION['juros'])){
        echo "<br>";
        echo "Total de juros pago: R$ " . $_SESSION['juros'];
    }
?>
</body>
</html>