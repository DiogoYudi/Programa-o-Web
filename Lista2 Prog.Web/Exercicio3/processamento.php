<?php
    class Carro{
        private $consumo;
        private $qtdcomb;
        private $totallitro;

        public function __construct($consumo){
            $this->consumo = $consumo;
            $this->qtdcomb = 0;
            $this->totallitro = 0;
        }

        public function andar($kmpercorrido){
            $this->totallitro = $kmpercorrido/$this->consumo;
            $this->qtdcomb -= $this->totallitro;
        }

        public function getComb(){
            return $this->qtdcomb;
        }

        public function setComb($qtdcomb){
            $this->qtdcomb = $qtdcomb;
        }
    }
?>