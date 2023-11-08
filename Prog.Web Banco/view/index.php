<?php

require_once("../controllers/ClienteController.php");
require_once("../models/ClienteModel.php");
require_once("../ConexaoBD.php");


$bd = new ConexaoBD();
$model = new ClienteModel($bd);
$controller = new ClienteController($model);

if(isset($_POST['submit']) && $_POST['submit'] == "adicionar"){
    $controller->adcCliente($_POST['nome'], $_POST['codigo'], $_POST['telefone']);
}

if(isset($_POST['submit']) && $_POST['submit'] == "alterar"){
    $controller->alterarClientes($_POST['nome'], $_POST['codigo'], $_POST['telefone']);
}

if(isset($_POST['submit']) && $_POST['submit'] == "deletar"){
    $controller->deletarCliente($_POST['codigo']);
}
?>