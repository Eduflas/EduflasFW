<?php
/**
 *
 *  Eduflas FrameWork
 *
 * 
 */


//Configuración global
require_once 'config/global.php';

//Base para los controladores
require_once 'core/Controller.php';

//Funciones para el controlador frontal
require_once 'core/FrontController.php';

//Lanzamos controlador y acción
if(isset($_GET["controller"])){
    $controllerObj=loadController($_GET["controller"]);
    initAction($controllerObj);
}else{
    $controllerObj=loadController(CONTROLADOR_DEFECTO);
    initAction($controllerObj);
}




