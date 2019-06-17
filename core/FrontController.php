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

function parse_path() {
        $path = array();
        if (isset($_SERVER['REQUEST_URI'])) {

            $request_path = explode('?', $_SERVER['REQUEST_URI']);

            $path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
            $path['call_utf8'] = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
            $path['call'] = utf8_decode($path['call_utf8']);
            if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
                $path['call'] = '';
            }
            $path['call_parts'] = explode('/', $path['call']);
            if (count($request_path)>1){
                $path['query_utf8'] = urldecode($request_path[1]);
                $path['query'] = utf8_decode(urldecode($request_path[1]));
                $vars = explode('&', $path['query']);
                foreach ($vars as $var) {
                    $t = explode('=', $var);
                    $path['query_vars'][$t[0]] = $t[1];
                }
            }
        }
        return $path;
    }


$path_info = parse_path();