<?php
    session_start();
    
    if(!empty($_POST['inputNum']) && (!empty($_POST['inputNum2'])))
    {
        $v = $_POST['inputNum'];
        $l = $_POST['inputNum2'];
        $custo = $v/(1+($l/100));


        $_SESSION['Resultado'] = $custo;
        header('location:../Exercicio3/index.php');
        die();
    }
?>