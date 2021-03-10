<?php
    include "./controller/StudentController.php";
    include "./service/StudentService.php";
    include "./repository/StudentDaoImp.php";

    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json");
    
    $dao = new StudentDaoImp();
    $service = new StudentService($dao);
    $studentController = new StudentController($service);

    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            if(isset($_GET['id'])){
               echo $studentController->getStudentById($_GET['id']);
            }
            else{
                echo $studentController->listAllStudent();
            }            
            break;
        case 'POST':
            $_POST = json_decode(file_get_contents('php://input'),true);
            echo $studentController->createStudent($_POST);
            break;
        case 'PUT':
            $_POST = json_decode(file_get_contents('php://input'),true);
            echo $studentController->updateStudent($_POST, $_GET['id']);
            break;
        case 'DELETE':
            echo $studentController->deleteStudent($_GET['id']);
            break;
    }
?>
