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
        $d = new Data();
        $d1 = new Data(1,8,2023);
        echo $d->getDay() . '<br>';
        echo $d1->getDay() . '<br>';
        echo $d1->nextDay() . '<br>';
        echo $d1->prevDay() . '<br>';
        echo $d1->getDate() . '<br>';
        echo $d1->dayDay(31) . '<br>';
    ?>
</body>
</html>