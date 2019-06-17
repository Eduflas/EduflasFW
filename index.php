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


	$Controller = $path_info['call_parts'][0];
	$Accion = $path_info['call_parts'][1];

	echo $Controller.'<br>'.$accion;


if(isset($_GET["controller"])){
    $controllerObj=loadController($path_info['call_parts'][0]);
    initAction($controllerObj);
}else{
    $controllerObj=loadController(CONTROLADOR_DEFECTO);
    initAction($controllerObj);
}




