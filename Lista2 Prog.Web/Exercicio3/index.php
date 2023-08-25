<?php
    require "processamento.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex3</title>
</head>
<body>
    <?php
        $c = new Carro(8.2);
        echo "Quantidade de combustível inicial: " . $c->getComb() . '<br>';
        $c->setComb(2);
        echo "Quantidade de combustível: " . $c->getComb() . '<br>';
        $c->andar(9);
        if($c->getComb()<0)
            echo "Não há quantia de combustível o suficiente para percorrer";
        else
            echo "Quantidade de combustível após percorrer o trajeto: " . round($c->getComb(),2) . '<br>';
    ?>
</body>
</html>