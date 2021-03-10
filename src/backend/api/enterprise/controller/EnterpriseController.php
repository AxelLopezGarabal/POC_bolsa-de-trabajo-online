<?php
    include '../service/EnterpriseService.php';
    
    class EnterpriseController{ 
        private $service;
        
        function __construct($a) {
            $this->service = $a;
        } 

        public function getEnterpriseById($id){
            //$this->validateId($id);
            return json_encode($this->service->getById($id));
        }

        public function listAllEnterprise(){
            return json_encode($this->service->getAll());
        }

        public function createEnterprise($body){
            return json_encode($this->service->createEnterprise($body));
        }

        public function updateEnterprise($body, $id){
            //$this->validateID($id);
            return json_encode($this->service->updateEnterprise($body, $id));
        }

        public function deleteEnterprise($id){
            //$this->validateID($id);
            return json_encode($this->service->deleteEnterprise($id));
        }
    }
?>
