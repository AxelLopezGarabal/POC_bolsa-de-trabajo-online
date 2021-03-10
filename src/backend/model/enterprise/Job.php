<?php
    class Job{
        private $fromDate;
        private $toDate;
        private $details;
        private $isAproved;

        //CONSTRUCTOR
        public function __construct($fromDate, $toDate, $details){
            $this->fromDate = $fromDate;
            $this->toDate   = $toDate;
            $this->details  = $details;
            $this->isAproved= false;
        }

        //GETTERS
        public function getFromDate(){
            return $this->fromDate;
        }

        public function getFromTo(){
            return $this->toDate;
        }
        public function getDetails(){
            return $this->details;
        }

        //STATE
        public function changeState(){
            $this->isAproved = !$this->isAproved;
        }

        //SETTERS
        public function setFromDate($fromDate){
            $this->fromDate = $fromDate;
        }
        public function setFromTo($toDate){
            $this->toDate = $toDate;
        }
        public function setDetails($details){
            $this->details = $details;
        }
    }
?>
