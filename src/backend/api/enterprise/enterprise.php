<?php
    include "./repository/EnterpriseDaoImp.php";
    include "./service/EnterpriseService.php";
    include "./controller/EnterpriseController.php";

    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json");
    
    $dao = new EnterpriseDaoImp();
    $service = new EnterpriseService($dao);
    $controller = new EnterpriseController($service);

    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            if(isset($_GET['id'])){
               echo $controller->getEnterpriseById($_GET['id']);
            }
            else{
                echo $controller->listAllEnterprise();
            }            
            break;
        case 'POST':
            $_POST = json_decode(file_get_contents('php://input'),true);
            echo $controller->createEnterprise($_POST);
            break;
        case 'PUT':
            $_POST = json_decode(file_get_contents('php://input'),true);
            echo $controller->updateEnterprise($_POST, $_GET['id']);
            break;
        case 'DELETE':
            echo $controller->deleteEnterprise($_GET['id']);
            break;
    }
?>
