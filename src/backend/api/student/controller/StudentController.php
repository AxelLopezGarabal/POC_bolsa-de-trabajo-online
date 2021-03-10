<?php
    include '../service/StudentService.php';
    
    class StudentController{ 
        private $service;
        
        function __construct($a) {
            $this->service = $a;
        } 

        public function getStudentById($id){
            //$this->validateId($id);
            return json_encode($this->service->getById($id));
        }

        public function listAllStudent(){
            return json_encode($this->service->getAll());
        }

        public function createStudent($body){
            return json_encode($this->service->createStudent($body));
        }

        public function updateStudent($body, $id){
            //$this->validateID($id);
            return json_encode($this->service->updateStudent($body, $id));
        }

        public function deleteStudent($id){
            //$this->validateID($id);
            return json_encode($this->service->deleteStudent($id));
        }
    }
?>
