<?php
/**
 * User: Edu Torres
 * Date: 17/06/2019
 */
class IndexController extends Controller{

    public function __construct() {
        parent::__construct();
    }

    public function index(){

        $this->view('index',array(
            'message'=>'OK!!!!'
        ));

    }

    public function holaroy(){
    	echo 'Hola yo';
    	die();
    }


}
