<?php

/*
 * controllerFactory class for creating object of controller classes
 */

class controllerFactory {
    

    /*
     * Function for creating objects of controller classes
     */
    public static function createControllerObject() {
        $url = controllerFactory::getContollerName();
        $conrollerObject = new $url['controller']();
        baseController::callAction($conrollerObject,$url);             
    }
    
    /*
     * Function for making array of controller, action and parmas
     */    
    public static function getContollerName() {
        if(!empty($_GET['url'])) {
            $urlArray = explode('/', $_GET['url']);
            $controller =  array_shift($urlArray);
            $action =  array_shift($urlArray);     
        }
        $url['controller'] = !empty($controller) ? $controller.'Controller' : 'baseController';
        $url['action'] = !empty($action) ? $action : 'index';
        if(file_exists(ROOT . DS . 'app' . DS . 'controllers' . DS . $url['controller'] . '.php')){
            require_once ROOT . DS . 'app' . DS . 'controllers' . DS . $url['controller'] . '.php';
        }
        return $url;
    }

}
