<?php
    include '../service/AdminService.php';
    
    class AdminController{ 
        private $service;
        
        function __construct($a) {
            $this->service = $a;
        } 

        public function logIn($body){
            //$this->validateId($id);
            return json_encode($this->service->doLogIn($body));
        }
    }
?>
