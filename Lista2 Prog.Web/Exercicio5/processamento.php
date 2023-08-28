<?php
    class airLine{
        private $number;
        private $date;

        public function __construct($number, $date){
            $this->number = $number;
            $datetime = new Date($date);
            $this->date = $datetime;
        }

        public function getNextSeat(){
            if($this->number!=100)
                return $this->number+1;
        }

        public function Ocuppies($number){
            
        }
    }
?>