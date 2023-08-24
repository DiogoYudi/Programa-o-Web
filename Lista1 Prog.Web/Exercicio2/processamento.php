<?php
    session_start();
    
    if(!empty($_POST['inputNum']))
    {
        $soma = 0;
        $n = $_POST['inputNum'];
        while ($n > 0)
        {
            $d = $n % 10;
            $soma += $d;
            $n = $n/10;
        }
        $_SESSION['Resultado'] = $soma;
        header('location:../Exercicio2/index.php');
        die();
    }
?>