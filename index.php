<?php
session_start();

define('CONTROLLERS_PATH', __DIR__ . '/controller/');

include "./utils/lang.php";
include "./router.php";

$controllerFiles = scandir(CONTROLLERS_PATH);

foreach ($controllerFiles as $file) {
    if ($file !== '.' && $file !== '..' && is_file(CONTROLLERS_PATH . $file)) {
        $controllerName = pathinfo($file, PATHINFO_FILENAME);
        $route = '/' . strtolower(str_replace('Controller', '', $controllerName));
        if($route=='/home'){
            $route='/';
        }
        Router::get($route, $controllerName . '@index');
    }
}


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//SOLO PARA XAMPP
$replace = str_replace('/www.renthub.es','',$uri);
$uri=$replace;
//SOLO PARA XAMPP

$what=explode('/',$uri);
$uri='/'.$what[1];

$routeHandler = Router::handle($uri);

if ($routeHandler) {
    list($controllerName, $methodName) = explode('@', $routeHandler);
    
    $controllerFile = CONTROLLERS_PATH . $controllerName . '.php';
    require $controllerFile;
    
    if (class_exists($controllerName) && method_exists($controllerName, $methodName)) {  
        $controllerInstance = new $controllerName();
        $controllerInstance->$methodName();
    } else {
        header("HTTP/1.0 404 Not Found");
        echo "Error 404 - Página no encontrada";
    }
} else {
    $errorController = 'NotFoundController';
    $errorMethod = 'index';

    $controllerFile = CONTROLLERS_PATH . $errorController . '.php';
    if (file_exists($controllerFile)) {
        require_once $controllerFile;

        if (method_exists($errorController, $errorMethod)) {
            $errorInstance = new $errorController();
            $errorInstance->$errorMethod();
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "Error 404 - Página no encontrada";
        }
    } else {
        header("HTTP/1.0 404 Not Found");
        echo "Error 404 - Página no encontrada";
    }
}
