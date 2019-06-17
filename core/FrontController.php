<?php
/**
 * User: Edu Torres
 * Date: 14/06/2019
 */
function loadController($controller){
    $controller = ucwords($controller).'Controller';
    $strFileController = 'controller/'.$controller.'.php';

    if(!is_file($strFileController)){
        $strFileController='controller/'.ucwords(CONTROLADOR_DEFECTO).'Controller.php';
    }

    require_once $strFileController;
    $controllerObj = new $controller();
    return $controllerObj;
}

function loadAction($controllerObj,$action){
    $controllerObj->$action();
}

function initAction($controllerObj){
    if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
        loadAction($controllerObj, $_GET["action"]);
    }else{
        loadAction($controllerObj, ACCION_DEFECTO);
    }
}
