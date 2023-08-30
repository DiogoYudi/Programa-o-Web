<?php
    require "processamento.php";
    $a = new AirLine(1, '01-08-2023');
    echo "Proximo assento livre: assento ".$a->getNextSeat().'<br>';
    $a->verifySeat(2);
    echo $a->Ocuppies(2).'<br>';
    echo $a->Ocuppies(3).'<br>'; 
    echo $a->Ocuppies(2).'<br>';
    echo "Assentos livres: ".$a->getVagas().'<br>';
    echo "Número do voo: ".$a->getVoo().'<br>';
    echo "Data do voo: ".$a->getDataVoo();
?>