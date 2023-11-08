<?php

    require_once('../models/BarcoModel.php');

    class BarcoController{
        private $barcoController;

        public function __construct(BarcoModel $barcoController)
        {
            $this->barcoController = $barcoController;
        }

        public function adcBarco($codigo, $modelo, $fabricante, $opcionais, $cor){
            $barco = $this->barcoController->adicionarBarco($codigo, $modelo, $fabricante, $opcionais, $cor);
            $barco = $this->barcoController->getBarco();
            include '../view/Barco.php';
        }

        public function alterarBarco($codigo, $modelo, $fabricante, $opcionais, $cor){
            $barco = $this->barcoController->alterarBarco($codigo, $modelo, $fabricante, $opcionais, $cor);
            $barco = $this->barcoController->getBarco();
            include '../view/Barco.php';
        }

        public function deletarBarco($codigo){
            $barco = $this->barcoController->excluirBarco($codigo);
            $barco = $this->barcoController->getBarco();
            include '../view/Barco.php';
        }
    }
?>