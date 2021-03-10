<?php
    include "./StudentDao.php";
    include "./config.php";

class EnterpriseDaoImp{
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

    public function getById($id){
        $conn = $this->connect();

        // Check connection
        if (!$conn) {
            return ("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM `Enterprise` WHERE `CUIT`=" . $id;
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $resultArray = $result->fetch_all(MYSQLI_ASSOC);
            return $resultArray[0];
        } else {
            echo "0 results";
        }

        mysqli_close($conn);
    }

    public function getAll(){
        $conn = $this->connect();

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "SELECT * FROM `Enterprise`";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $resultArray = $result->fetch_all(MYSQLI_ASSOC);
            $var = array();
            foreach ($resultArray as $row){
                array_push($var, $row);
            }
            return $var;
        } else {
            echo "0 results";
        }

        mysqli_close($conn);
    }

    public function save($body){
        $conn = $this->connect();

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $bodyCUIT = $body['cuit'];
        $bodyName = $body['name'];  
        $bodyProvince = $body['province'];
        $bodyLocality = $body['locality'];
        $bodyDirec = $body['direction'];
        $bodyPhoneNro = $body['phoneNro'];
        $bodyEmail = $body['email'];
            
        $sql = 
        "INSERT INTO `Enterprise`(`CUIT`, `Name`, `Province`, `Locality`, `Direction`, `PhoneNro`, `Email`) VALUES ($bodyCUIT, $bodyName, $bodyProvince, $bodyLocality, $bodyDirec, $bodyPhoneNro, $bodyEmail);";
        $result = mysqli_query($conn, $sql);
        

        if ($conn->query($sql) === TRUE) {
            return  "message: New record created successfully";
        } 
        else {
            return "Error: " . $sql . "<br>" . $conn->error;
          }
        mysqli_close($conn);
    }

    public function delete($id){
        $conn = $this->connect();
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // sql to delete a record
        $sql = "DELETE FROM `Enterprise` WHERE `CUIT`=" . $id;
    
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    
        $conn->close();
    }    
}