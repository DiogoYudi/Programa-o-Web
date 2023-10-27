<?php

require_once("../controllers/ClienteController.php");
require_once("../models/ClienteModel.php");
require_once("../ConexaoBD.php");


$bd = new ConexaoBD();
$model = new ClienteModel($bd);
$controller = new ClienteController($model);
$controller->listarClientes();
?>