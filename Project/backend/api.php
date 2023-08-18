<?php 

if (isset($_GET['controller']) && isset($_GET['action'])) {
    //echo $_GET['controller']. " " . $_GET['action'];
    $controller = $_GET['controller'];
    $action = $_GET['action'];
    $controllerFileName = './controllers/' . $controller . 'Controller.php';
    if (file_exists($controllerFileName)) {
        include($controllerFileName);
        $controllerClass = $controller . 'Controller';
        $controllerObj = new $controllerClass();
        if (method_exists($controllerObj, $action)) {
            $controllerObj->$action();
        } else {
            //response 404
        }
    } else {
        //response 404
    }
} else {
    //response 500
}