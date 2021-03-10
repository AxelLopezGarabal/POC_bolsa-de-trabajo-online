<?php
    include "./StudentDao.php";
    include "./config.php";

class AdminDaoImp{
    private $servername = 'localhost:3306';
    private $username   = 'root'; 
    private $password   = 'password';
    private $db         = 'POC';


    public function __construct(){
    }

    public function connect(){
        return new mysqli(
            $this->servername,
            $this->username, 
            $this->password,
            $this->db
        );

    }

    public function doLogIn($body){
        $conn = $this->connect();

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $bodyUsername = $body['username'];
        $bodyPassword = $body['password'];
        $sql = "SELECT `Username`, `Password` FROM `Admin` WHERE `Username`='$bodyUsername' AND `Password`='$bodyPassword'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $resultArray = $result->fetch_all(MYSQLI_ASSOC);
            return $resultArray[0];
        } else {
            echo "try again";
        }

        mysqli_close($conn);
    }
}