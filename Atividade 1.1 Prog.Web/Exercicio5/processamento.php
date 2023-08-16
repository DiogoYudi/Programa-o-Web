<?php
    session_start();
    
    if(!empty($_POST['inputNum']) && (!empty($_POST['inputNum2'])) && (!empty($_POST['inputNum3'])))
    {
        $m = $_POST['inputNum'];
        $j = $_POST['inputNum2'];
        $p = $_POST['inputNum3'];
        $parcela = $m * (($j/100) * ((1+($j/100))**$p)/(1+($j/100)**$p)-1)


        $_SESSION['Resultado'] = $custo;
        header('location:../Exercicio3/index.php');
        die();
    }
?>