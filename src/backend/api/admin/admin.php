<?php
    include './controller/AdminController.php';
    include './service/AdminService.php';
    include './repository/AdminDaoImp.php';

    header("Content-Type: application/json");
    
    $dao = new AdminDaoImp();
    $service = new AdminService($dao);
    $controller = new AdminController($service);
   
    header('Access-Control-Allow-Origin: http://localhost:3000/');
    header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');

    switch ($_SERVER['REQUEST_METHOD']) {
        case 'POST':
            $_POST = json_decode(file_get_contents('php://input'),true);
            echo $controller->logIn($_POST);
            break;
    }
?>
