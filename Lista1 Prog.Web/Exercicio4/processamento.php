<?php
    session_start();
    
    if(!empty($_POST['inputNum']))
    {
        $c = 0;
        $p = $_POST['inputNum'];
        if ($p > 50)
            $t = $p - 50;
        while ($t > 0)
        {
            $t = $t - 5;
            $c += 1;
        }
        $m = $c * 4;

        $_SESSION['Resultado'] = $m;
        header('location:../Exercicio4/index.php');
        die();
    }
?>