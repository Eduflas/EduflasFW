<?php
/**
 * User: Edu Torres
 * Date: 14/06/2019
 */
class Controller{

    public function __construct() {
        require_once 'ConectDB.php';
        require_once 'DB.php';
        require_once 'Model.php';

        //Include all models
        foreach(glob("../model/*.php") as $file){
            require_once $file;
        }
    }

    //Plugins y funcionalidades

    /*
    * insert params from controller into the view
    */
    public function view($vista,$data = null){
        if (!empty($data))
        foreach ($data as $id_assoc => $valor) {
            ${$id_assoc}=$valor;
        }

        require_once 'Helper.php';
        $helper = new Helper();
        require_once 'core/Head.php';
        require_once 'view/'.$vista.'View.php';
        require_once 'core/Footer.php';
    }

    public function redirect($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        header("Location:index.php?controller=".$controlador."&action=".$accion);
    }

    //Métodos para los controladores

}
