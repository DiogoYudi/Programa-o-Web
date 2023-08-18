<?php
    session_start();
    
    if(!empty($_POST['inputNum']) && (!empty($_POST['inputNum2'])) && (!empty($_POST['inputNum3'])))
    {
        $m = $_POST['inputNum'];
        $j = $_POST['inputNum2'];
        $p = $_POST['inputNum3'];
        $sdo_devedor = $m;
        $totaljuros = 0;
        $parcela = $m * ((($j/100) * ((1+($j/100))**$p))/(((1+($j/100))**$p)-1));
        $parcela = round($parcela, 2);
        for ($i = 0; $i < $p; $i++){
            $juros = round(($sdo_devedor * $j)/100, 2);
            $amortizacao = round($parcela - $juros, 2);
            $sdo_devedor = round($sdo_devedor - $amortizacao, 2);
            $totaljuros += $juros; 
            if($sdo_devedor < 0)
                $sdo_devedor = 0;
            echo "Parcela: " . $parcela . "....\n" . "Amortização: " . $amortizacao . "....\n" . "Juros: " . $juros . "....\n" . "Saldo Devedor: " . $sdo_devedor . "<br>";
        }
        echo "Total Juros: " . $totaljuros;
    }
?>