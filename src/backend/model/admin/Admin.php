<?php
    class Admin{
        private $username;
        private $password;

        public function __construct($aUsername, $aPassword){
            $this->username = $aUsername;
            $this->password = $aPassword;
        }

        public function getUsername(){
            return $this->username;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setUsername($aUsername){
            $this->username = $aUsername;
        }

        public function setPassword($aPassword){
            $this->password = $aPassword;
        }
    }  
?>
