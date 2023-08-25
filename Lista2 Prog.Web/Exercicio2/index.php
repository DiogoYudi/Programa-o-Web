<?php
    require "processamento.php";
    $c = new Calculadora();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2</title>
</head>
<body>
    <form method="POST">
        <input type="submit" value="Calcular">
    </form>
    <?php
            $c->soma(5);
            echo "Resultado da soma = " . $c->getRes() . '<br>';
            $c->subtrai(2);
            echo "Resultado da subtração = " . $c->getRes() . '<br>';
            $c->multiplica(3);
            echo "Resultado da multiplicação = " . $c->getRes() . '<br>';
            $c->desfaz();
            echo "Ação desfeita. Resultado anterior = " . $c->getRes() . '<br>';
            $c->potencia(2);
            echo "Resultado da potencia = " . $c->getRes() . '<br>';
            $c->divide(3);
            echo "Resultado da divisão = " . $c->getRes() . '<br>';
            $c->desfaz();
            echo "Ação desfeita. Resultado anterior = " . $c->getRes() . '<br>';
            $c->porcentagem(400);
            echo "Resultado da porcentagem = " . $c->getRes() . '<br>';
            $c->raiz();
            echo "Resultado da raiz = " . $c->getRes() . '<br>';
            $c->zerar();
            echo "Resultado zerado = " . $c->getRes() . '<br>';
    ?>
</body>
</html>