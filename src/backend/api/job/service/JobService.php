<?php

class JobService{

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
    public function createJob($body){
        return $this->dao->save($body);
    }
    public function updateJob($body, $id){
        return $this->dao->update($id, $body);
    }
    public function deleteJob($id){
        return $this->dao->delete($id);
    }
}
?>