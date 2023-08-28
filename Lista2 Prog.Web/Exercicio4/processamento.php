<?php
    class Data{
        private $day;
        private $month;
        private $year;

        public function __construct($day = 0, $month = 0, $year = 0){
            $this->day = $day;
            $this->month = $month;
            $this->year = $year;
        }

        public function getDay() {
            return $this->day;
        }
    
        public function setDay($day) {
            $this->day = $day;
        }

        public function getMonth(){
            return $this->month;
        }

        public function setMonth($month){
            $this->month = $month;
        }

        public function getYear(){
            return $this->year;
        }

        public function setYear($year){
            $this->year = $year;
        }

        public function nextDay(){
            $datetime = new DateTime();
            $datetime->setDate($this->year,$this->month,$this->day);
            return $datetime->modify('+1 day')->format('d/m');
        }

        public function prevDay(){
            $datetime = new DateTime();
            $datetime->setDate($this->year,$this->month,$this->day);
            return $datetime->modify('-1 day')->format('d/m');
        }

        public function getDate(){
            $datetime = new DateTime();
            $datetime->setDate($this->year,$this->month,$this->day);
            return $datetime->format('d/m/Y');
        }

        public function bissexto(){
            if(($this->year/4==0 && $this->year/100!=0) || $this->year%400==0)
                echo "É um ano bissexto";
            else
                echo "Não é um ano bissexto";
        }

        public function diffYears($date){
            $datetime = new DateTime("$this->day-$this->month-$this->year");
            $datetime2 = new DateTime($date);
            $interval = $datetime->diff($datetime2);

            return $interval->days;
        }

        public function compareDate($date){
            $datetime = new DateTime("$this->day-$this->month-$this->year");
            $datetime2 = new DateTime($date);
            if($datetime == $datetime2)
                return 0;
            else if($datetime>$datetime2)
                return 1;
            else
                return -1;
        }
    }
?>