<?php
    session_start();
    
    if(!empty($_POST['inputNum']) && (!empty($_POST['inputNum2'])) && (!empty($_POST['inputNum3'])))
    {
        $list = [];
        $m = $_POST['inputNum'];
        $j = $_POST['inputNum2'];
        $p = $_POST['inputNum3'];
        $sdo_devedor = $m;
        $totaljuros = 0;
        $parcela = $m * ((($j/100) * ((1+($j/100))**$p))/(((1+($j/100))**$p)-1));
        $parcela = round($parcela, 2);
        for ($i = 0; $i < $p; $i++){
            $list2 = [];
            $a = "N° " . $i+1;
            $juros = round(($sdo_devedor * $j)/100, 2);
            $amortizacao = round($parcela - $juros, 2);
            $sdo_devedor = round($sdo_devedor - $amortizacao, 2);
            $totaljuros += $juros;
            if($sdo_devedor < 0)
                $sdo_devedor = 0;
            array_push($list2, $a);
            array_push($list2, $parcela);
            array_push($list2, $amortizacao);
            array_push($list2, $juros);
            array_push($list2, $sdo_devedor);
            array_push($list, $list2);
        }
        $_SESSION['Resultado'] = $list;
        $_SESSION['juros'] = $totaljuros;
        header('location:../Exercicio5/index.php');
        die();
    }
?>