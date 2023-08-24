<?php
    class Calculadora{
        private $res;
        private $mem;

        public function __construct(){
            $this->res = 0;
            $this->mem = 0;
        }

        public function zerar(){
            $this->res = 0;
            $this->mem = 0;
        }

        public function desfaz(){
            $this->res = $this->mem;
        }

        public function getRes(){
            return $this->res;
        }

        public function soma($valor){
            $this->mem = $this->res;
            $this->res += $valor;
        }

        public function subtrai($valor){
            $this->mem = $this->res;
            $this->res -= $valor; 
        }

        public function multiplica($valor){
            $this->mem = $this->res;
            $this->res *= $valor;
        }

        public function divide($valor){
            $this->mem = $this->res;
            $this->res = $this->res/$valor;
        }

        public function potencia($valor){
            $this->mem = $this->res;
            $this->res = $this->res**$valor;
        }

        public function porcentagem($valor){
            $this->mem = $this->res;
            $this->res = $this->res*$valor/100;
        }

        public function raiz(){
            $this->mem = $this->res;
            $this->res = sqrt($this->res);
        }
    }
?>