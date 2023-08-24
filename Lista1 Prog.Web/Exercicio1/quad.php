<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>square</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="inputNum" placeholder="Insira o lado do quadrado">
        <input id="botao" type="submit" value="Calcular">
    </form>

    <?php
        if(!empty($_POST['inputNum']))
        {
            $l = $_POST['inputNum'];
            $area = $l ** 2;
            echo "Área do quadrado = " . $area;
        }
    ?>

</body>
</html>