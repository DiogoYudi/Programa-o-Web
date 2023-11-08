<?php

require_once("../controllers/BarcoController.php");
require_once("../models/BarcoModel.php");
require_once("../ConexaoBD.php");

$bd = new ConexaoBD();
$model = new BarcoModel($bd);
$controller = new BarcoController($model);

if(isset($_POST['submit']) && $_POST['submit'] == "adicionar"){
    $controller->adcBarco($_POST['codigo'], $_POST['modelo'], $_POST['fabricante'], $_POST['opcionais'], $_POST['cor']);
}

if(isset($_POST['submit']) && $_POST['submit'] == "alterar"){
    $controller->alterarBarco($_POST['codigo'], $_POST['modelo'], $_POST['fabricante'], $_POST['opcionais'], $_POST['cor']);
}

if(isset($_POST['submit']) && $_POST['submit'] == "deletar"){
    $controller->deletarBarco($_POST['codigo']);
}
?>