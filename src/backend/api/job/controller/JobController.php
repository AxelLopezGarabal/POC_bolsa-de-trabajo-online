<?php
    include '../service/JobService.php';
    
    class JobController{ 
        private $service;
        
        function __construct($a) {
            $this->service = $a;
        } 

        public function getJobById($id){
            //$this->validateId($id);
            return json_encode($this->service->getById($id));
        }

        public function listAllJobs(){
            return json_encode($this->service->getAll());
        }

        public function createJob($body){
            return json_encode($this->service->createJob($body));
        }

        public function updateJob($body, $id){
            //$this->validateID($id);
            return json_encode($this->service->updateJob($body, $id));
        }

        public function deleteJob($id){
            //$this->validateID($id);
            return json_encode($this->service->deleteJob($id));
        }
    }
?>
