<?php
/**
 * User: Edu Torres
 * Date: 14/06/2019
 */
class Helper{

    public function url($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        $urlString="index.php?controller=".$controlador."&action=".$accion;
        return $urlString;
    }

    //Helpers para las vistas
}
