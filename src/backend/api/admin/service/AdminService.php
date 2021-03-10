<?php

class AdminService{

    private $dao;

    public function __construct($dao){
        $this->dao = $dao;
    }

    public function doLogIn($body){
        return $this->dao->doLogIn($body);
    }
}
?>