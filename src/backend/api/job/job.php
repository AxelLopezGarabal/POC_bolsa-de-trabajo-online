<?php
    include "./controller/JobController.php";
    include "./service/JobService.php";
    include "./repository/JobDaoImp.php";
    
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json");
    
    $dao = new JobDaoImp();
    $service = new JobService($dao);
    $studentController = new JobController($service);

    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            if(isset($_GET['id'])){
               echo $studentController->getJobById($_GET['id']);
            }
            else{
                echo $studentController->listAllJobs();
            }            
            break;
        case 'POST':
            $_POST = json_decode(file_get_contents('php://input'),true);
            echo $studentController->createJob($_POST);
            break;
        case 'PUT':
            $_POST = json_decode(file_get_contents('php://input'),true);
            echo $studentController->updateJob($_POST, $_GET['id']);
            break;
        case 'DELETE':
            echo $studentController->deleteJob($_GET['id']);
            break;
    }
?>
