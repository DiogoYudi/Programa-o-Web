<?php
    class Carro{
        private $brand;
        private $model;
        private $plate;
        private $color;

        public function __construct($brand, $model, $plate, $color){
            $this->brand = $brand;
            $this->model = $model;
            $this->plate = $plate;
            $this->color = $color;
        }

        public function setBrand($brand){
            $this->brand = $brand;
        }

        public function getBrand(){
            return $this->brand;
        }

        public function setModel($model){
            $this->model = $model;
        }

        public function getModel(){
            return $this->model;
        }

        public function setPlate($plate){
            $this->plate = $plate;
        }

        public function getPlate(){
            return $this->plate;
        }

        public function setColor($color){
            $this->color = $color;
        }

        public function getColor(){
            return $this->color;
        }
    }
?>