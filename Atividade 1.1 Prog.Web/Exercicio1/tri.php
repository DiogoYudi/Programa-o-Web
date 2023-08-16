<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>triangle</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="inputNum" placeholder="Insira a base do triangulo">
        <input type="text" name="inputNum2" placeholder="Insira a altura do triangulo">
        <input id="botao" type="submit" value="Calcular">
    </form>

    <?php
        if(!empty($_POST['inputNum']) && !empty($_POST['inputNum2']))
        {
            $b = $_POST['inputNum'];
            $h = $_POST['inputNum2'];
            $area = ($b * $h)/2;
            echo "Área do triangulo = " . $area;
        }
    ?>

</body>
</html>