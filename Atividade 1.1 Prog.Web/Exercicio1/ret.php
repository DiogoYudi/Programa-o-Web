<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rectangle</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="inputNum" placeholder="Insira o lado do retangulo">
        <input type="text" name="inputNum2" placeholder="Insira a base do retangulo">
        <input id="botao" type="submit" value="Calcular">
    </form>

    <?php
        if(!empty($_POST['inputNum']) && !empty($_POST['inputNum2']))
        {
            $l = $_POST['inputNum'];
            $b = $_POST['inputNum2'];
            $area = $b * $l;
            echo "Área do retangulo = " . $area;
        }
    ?>

</body>
</html>