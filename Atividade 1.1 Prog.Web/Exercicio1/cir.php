<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>circle</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="inputNum" placeholder="Insira o raio do circulo">
        <input id="botao" type="submit" value="Calcular">
    </form>

    <?php
        if(!empty($_POST['inputNum']))
        {
            $r = $_POST['inputNum'];
            $area = 3.14 * ($r ** 2);
            echo "Área do circulo = " . $area;
        }
    ?>

</body>
</html>