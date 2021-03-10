<?php

class EnterpriseService{

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
    public function createEnterprise($body){
        return $this->dao->save($body);
    }
    public function updateEnterprise($body, $id){
        return $this->dao->update($id, $body);
    }
    public function deleteEnterprise($id){
        return $this->dao->delete($id);
    }
}
?>