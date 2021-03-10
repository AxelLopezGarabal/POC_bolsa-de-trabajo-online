<?php
    class Student{
        private $firstname;
        private $lastname;
        private $documentType;
        private $documentNro;
        private $birthDate;
        private $email;
        private $career;
        private $year;
        private $details;
        private $isAprobed;

        //CONSTRUCTOR
        public function __construct(
        $firstname, $lastname, $documentType, $documentNro, $birthDate, $email, $career, $year, $details){
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->documentType = $documentType;
            $this->documentNro = $documentNro;
            $this->birthDate = $birthDate;
            $this->email = $email;
            $this->career = $career;
            $this->year = $year;
            $this->details = $details;
            $this->isAprobed = false;
        }

        //GETTERS
        public function getFirstname(){
            return $this->firstname;
        }

        public function getLastname(){
            return $this->lastname;
        }

        public function getDocumentType(){
            return $this->documentType;
        }

        public function getDocumentNro(){
            return $this->documentNro;
        }

        public function getBirthName(){
            return $this->birthDate;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getCareer(){
            return $this->career;
        }

        public function getYear(){
            return $this->year;
        }

        public function getDetails(){
            return $this->details;
        }

        public function getIsAprobed(){
            return $this->isAprobed;
        }

        //STATE
        public function changeState(){
            $this->isAprobed = !($this->isAprobed);
        }

        //SETTERS
        public function setFirstname($firstname){
            $this->firstname = $firstname;
        }

        public function setLastname($lastname){
            $this->lastname = $lastname;
        }

        public function setDocumentType($documentType){
            $this->documentType = $documentType;
        }

        public function setDocumentNro($documentNro){
            $this->documentNro = $documentNro;
        }

        public function setBirthName($birthDate){
            $this->birthDate = $birthDate;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setCareer($career){
            $this->career = $career;
        }

        public function setYear($year){
            $this->year = $year;
        }

        public function setDetails($details){
            $this->details = $details;
        }

    }
?>

