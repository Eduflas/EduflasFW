<?php
/**
 *
 *  Eduflas FrameWork
 *
 * 
 */
#ini_set('display_errors', "1");

//Configuración global
require_once 'config/global.php';

//Base para los controladores
require_once 'core/Controller.php';

//Funciones para el controlador frontal
require_once 'core/FrontController.php';

//Lanzamos controlador y acción

	$controller = (isset($path_info['call_parts'][0]))? $path_info['call_parts'][0]:'';
	$accion = (isset($path_info['call_parts'][1]))? $path_info['call_parts'][1]:'';


if(isset($controller) && !empty($controller)){
    $controllerObj = loadController($controller);
    initAction($controllerObj);
}else{
    $controllerObj = loadController(CONTROLADOR_DEFECTO);
    initAction($controllerObj);
}




