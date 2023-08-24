<?php
    require "processamento.php";
    $r = new Retangulo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="alt" placeholder="Altura">
        <input type="number" name="larg" placeholder="Largura">
        <input type="submit" value="Calcular">
    </form>
    <?php
        if(isset($_POST['larg']) && isset($_POST['alt'])){
            $r->setLargura($_POST['larg']);
            $r->setAltura($_POST['alt']);
            echo "Largura = " . $r->getLargura() . '<br>';
            echo "Altura = " . $r->getAltura() . '<br>';
            echo "Área = " . $r->calcA() . '<br>';
            echo "Perímetro = " . $r->calcP() . '<br>';
            echo $r->isQuad();
        }
    ?>
</body>
</html>