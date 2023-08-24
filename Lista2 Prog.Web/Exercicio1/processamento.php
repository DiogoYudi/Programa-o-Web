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

        public function calcA(){
            return $this->altura * $this->largura;
        }

        public function calcP(){
            return 2*($this->altura + $this->largura);
        }

        public function isQuad(){
            if($this->largura==$this->altura)
                return "É quadrado";
            else
                return "Não é quadrado";
        }
    }
?>