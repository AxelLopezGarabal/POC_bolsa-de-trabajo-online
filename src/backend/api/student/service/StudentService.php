<?php

class StudentService{

    private $dao;

    public function __construct($dao){
        $this->dao = $dao;
    }

    public function getById($id){
        return $this->dao->getById($id);
    }
    public function getAll(){
        return $this->dao->getAll();
    }
    public function createStudent($body){
        return $this->dao->save($body);
    }
    public function updateStudent($body, $id){
        return $this->dao->update($id, $body);
    }
    public function deleteStudent($id){
        return $this->dao->delete($id);
    }
}
?>