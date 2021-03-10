<?php
class Job{
    private $name;
    private $cuit;
    private $province;
    private $locality;
    private $direction;
    private $phoneNro;
    private $email;
    private $jobs;

    //CONSTRUCTOR
    public function __construct
    ($name, $cuit, $province, $locality, $direction, $phoneNro, $email, $jobs){
        $this->name= $name;
        $this->cuit= $cuit;
        $this->province= $province;
        $this->locality= $locality;
        $this->direction= $direction;
        $this->phoneNro= $phoneNro;
        $this->email= $email;
        $this->jobs= $jobs;
    }

    //GETTERS
    public function getName(){
        return $this->name;
    }
    
    public function getCUIT(){
        return $this->cuit;
    }
    
    public function getProvince(){
        return $this->province;
    }
    
    public function getLocality(){
        return $this->locality;
    }
    
    public function getDirection(){
        return $this->direction;
    }
    
    public function getPhoneNro(){
        return $this->phoneNro;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getJobs(){
        return $this->jobs;
    }
    
    //JOBS METHODS array example ->> $info = array('café', 'marrón', 'cafeína');
    public function amountOfJobs(){
        return count($this->jobs);
    }

        //PRECONDITION => index must exist
    public function getJobByIndex($index){
        return count($this->jobs[$index]);
    }

        //PRECONDITION => index must exist
    public function removeJobByIndex($index){
        unset($this->jobs[$index]);
    }

    //SETTERS
    public function setName($name){
        $this->name = $name;
    }
    
    public function setCUIT($cuit){
        $this->cuit = $cuit;
    }
    
    public function setProvince($province){
        $this->province = $province;
    }
    
    public function setLocality($locality){
        $this->locality = $locality;
    }
    
    public function setDirection($direction){
        $this->direction = $direction;
    }
    
    public function setPhoneNro($phoneNro){
        $this->phoneNro = $phoneNro;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
    
    public function setJobs($jobs){
        $this->jobs = $jobs;
    }
}
?>
