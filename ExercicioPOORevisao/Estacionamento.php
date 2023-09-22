<?php
    class Estacionamento{
        private $space;

        public function __construct(){
            $this->space = array();
        }

        public function setSpace($space){
            $this->space[] = $space;
        }

        public function getSpace(){
            return $this->space;
        }

        public function registerEntry($space){
            $this->space[] = $space;
        }

        public function registerDeparture($plate){
            foreach($this->space as $key => $space){
                if($space->getPlate() == $plate){
                    unset($this->space[$key]);
                    return true;
                }
            }
            return false;
        }
    }
?>