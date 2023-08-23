<?php
    class Retangulo{
        private $largura;
        private $altura;

        public function __construct(){
            $this -> largura = 1;
            $this -> altura = 1;
        }

        public function getLargura(){
            return $this->largura;
        }

        public function setLargura($largura){
            $this->largura = $largura;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function setAltura($altura){
            $this->altura = $altura;
        }

        public function calcA($altura, $largura){
            $this->area = $altura * $largura;
        }
    }
?>