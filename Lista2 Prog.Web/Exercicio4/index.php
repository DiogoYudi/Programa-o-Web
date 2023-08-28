<?php
    require "processamento.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex4</title>
</head>
<body>
    <?php
        $d = new Data();
        echo "Mostrar o dia com o construtor inicializando os dados com zero: ".$d->getDay() . '<br>';
        $d->setDay(4);
        $d->setMonth(5);
        $d->setYear(2025);
        echo "Data setado usando os métodos set: ".$d->getDate() . '<br>';
        echo "--------------------------------------------" . '<br>';
        $d1 = new Data(1,8,2023);
        echo "Mostrar data: ".$d1->getDate() . '<br>';
        echo "Mostrar dia: ".$d1->getDay() . '<br>';
        echo "Proximo dia: ".$d1->nextDay() . '<br>';
        echo " Dia anterior: ".$d1->prevDay() . '<br>';
        echo "Diferença de dias: " . $d1->diffYears('10-08-2023') . '<br>';
        echo "Comparação de data com pârametro igual: ".$d1->compareDate('01-08-2023') . '<br>';
        echo "Comparação de data com pârametro menor: ".$d1->compareDate('01-07-2023') . '<br>';
        echo "Comparação de data com pârametro maior: ".$d1->compareDate('01-09-2023') . '<br>';
    ?>
</body>
</html>