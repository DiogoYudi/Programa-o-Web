<?php
    class AirLine{
        private $number;
        private $date;
        private $seat = [];

        public function __construct($number, $date){
            $this->number = $number;
            $datetime = new DateTime($date);
            $this->date = $datetime;
        }

        public function getNextSeat(){
            $i = 1;
            foreach($this->seat as $i)
                $i++;
            return $i;
        }

        public function verifySeat($seatnumber){
            if(isset($this->seat[$seatnumber-1]) == null || $this->seat[$seatnumber-1] != $seatnumber)
                echo "Assento {$seatnumber} ocupado".'<br>';
            else
                echo "Assento {$seatnumber} livre".'<br>';
        }

        public function Ocuppies($seatnumber){
            if(isset($this->seat[$seatnumber-1]) == null || $this->seat[$seatnumber-1] != $seatnumber){
                $this->seat[$seatnumber-1] = $seatnumber;
                echo "Operação sucedida";
            }
            else
                echo "Operação não sucedida";
        }

        public function getVagas(){
            return 100-count($this->seat);
        }

        public function getVoo(){
            return $this->number;
        }

        public function getDataVoo(){
            return $this->date->format('d/m/Y');
        }
    }
?>