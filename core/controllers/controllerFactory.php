<?php

/**
 * Factory controller file for factory purpose
 */

/**
 * Factory controller for creating objects of controllers
 */
class controllerFactory {

    /**
     * Constructs required features for the notice board module
     *
     * @access public
     * @return void
     */ 
    public static function createControllerObject($url) {
        if(file_exists(ROOT . DS . 'app' . DS . 'controllers' . DS . $url['controller'] . '.php')){
            require_once ROOT . DS . 'app' . DS . 'controllers' . DS . $url['controller'] . '.php';
        }
        $conrollerObject = new $url['controller']();
        baseController::callAction($conrollerObject,$url);             
    }

}
