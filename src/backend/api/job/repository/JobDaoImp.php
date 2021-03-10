<?php
    include "./StudentDao.php";
    include "./config.php";

class JobDaoImp{
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
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "SELECT * FROM `Job` WHERE `Job_ID`=" . $id;
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
        
        $sql = "SELECT * FROM `Job`";
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

        $bodyDetails=$body["details"];
        $bodyFromDate=$body["fromDate"];
        $bodyToDate=$body["toDate"];
        $bodycuit=$body["cuit"];

        $sql = 
        "INSERT INTO `Job` (`Job_ID`, `Details`, `FromDate`, `ToDate`, `isApproved`, `CUIT`) VALUES (NULL, $bodyDetails, '$bodyFromDate', '$bodyToDate', '0', '$bodycuit')";
        mysqli_query($conn, $sql);
        

        if ($conn->query($sql) === TRUE) {
            return  "message: New record created successfully";
        } 
        else {
            return "Error: " . $sql . "<br>" . $conn->error;
          }
        mysqli_close($conn);
    }

    public function update($id, $body){
        // Create connection
        $conn = $this->connect();
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if($body['isApproved']){
            $sql = "UPDATE `Job` SET `IsApproved`='1' WHERE `Job_ID`=" . $id;
        }
        else{
            $sql = "UPDATE `Job` SET `IsApproved`='0' WHERE `Job_ID`=" . $id;
        }
        

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }

    public function delete($id){
        $conn = $this->connect();
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // sql to delete a record
        $sql = "DELETE FROM `Job` WHERE `Job_ID`=" . $id;
    
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    
        $conn->close();
    }
}