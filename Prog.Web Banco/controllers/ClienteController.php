<?php

    require_once('../models/ClienteModel.php');

    class ClienteController{
        private $clienteController;

        public function __construct(ClienteModel $clienteController)
        {
            $this->clienteController = $clienteController;
        }

        public function adcCliente($nome, $codigo, $telefone){
            $clientes = $this->clienteController->adicionarCliente($nome, $codigo, $telefone);
            $clientes = $this->clienteController->getCliente();
            include '../view/Cliente.php';
        }

        public function alterarClientes($nome, $codigo, $telefone){
            $clientes = $this->clienteController->alterarClientes($nome, $telefone, $codigo);
            $clientes = $this->clienteController->getCliente();
            include '../view/Cliente.php';
        }

        public function deletarCliente($codigo){
            $clientes = $this->clienteController->excluirCliente($codigo);
            $clientes = $this->clienteController->getCliente();
            include '../view/Cliente.php';
        }
    }
?>