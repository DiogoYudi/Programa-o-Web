<?php

    require_once('../models/ClienteModel.php');

    class ClienteController{
        private $clienteController;

        public function __construct(ClienteModel $clienteController)
        {
            $this->clienteController = $clienteController;
        }

        public function listarClientes()
        {
            $clientes = $this->clienteController->getCliente();
            include '../view/Cliente.php';
        }
        
    }

    

?>