<?php
    require "Carro.php";
    require "Estacionamento.php";
    $c = new Carro("Toyota", "Corolla", "ABC123", "Prata");
    echo $c->getBrand() . '<br>';
    echo $c->getModel() . '<br>';
    $e = new Estacionamento();
    $e->setSpace($c);
    var_dump($e);
    echo "<br>";
    if($e->registerDeparture("ABC123"))
        echo "Carro removido" . '<br>';
    else
        echo "Carro com a placa mencionada não encontrado" . '<br>';