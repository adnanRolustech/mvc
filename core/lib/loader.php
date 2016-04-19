<?php

/**
 * File for Error Reporting enable / disable and including core files
 */

/**
 * Function for Error Reporting enable / disable
 */
if (DEBUG) {
    error_reporting(-1);
    ini_set('display_errors', 'On');
} else {
    error_reporting(0);
    ini_set('display_errors', 'Off');
}

/*
 * loading files which are required to start mvc
 */
require_once ROOT . DS . 'core' . DS . 'controllers' . DS . 'controllerFactory.php';
require_once ROOT . DS . 'core' . DS . 'controllers' . DS . 'controllerInterface.php'; 
require_once ROOT . DS . 'core' . DS . 'controllers' . DS . 'baseController.php';
require_once ROOT . DS . 'core' . DS . 'views' . DS . 'viewManagerInterface.php';
require_once ROOT . DS . 'core' . DS . 'views' . DS . 'viewManager.php';
require_once ROOT . DS . 'core' . DS . 'models' . DS . 'modelFactory.php';
require_once ROOT . DS . 'core' . DS . 'models' . DS . 'database.php';
require_once ROOT . DS . 'core' . DS . 'models' . DS . 'dbalInterface.php'; 
require_once ROOT . DS . 'core' . DS . 'models' . DS . 'dbal.php';
require_once ROOT . DS . 'core' . DS . 'models' . DS . 'baseModel.php'; 
require_once ROOT . DS . 'app' . DS . 'models' . DS . 'metadata' . DS . 'metadata.php';

/*
 * Function for making array of controller, action and parmas
 */
function loadMVC() {
    if(!empty($_REQUEST['url'])) {
        $urlArray = explode('/', $_REQUEST['url']);
        $controller =  array_shift($urlArray);
        $action =  array_shift($urlArray);     
    }
    $url['controller'] = !empty($controller) ? $controller.'Controller' : 'baseController';
    $url['action'] = !empty($action) ? $action : 'index';
    controllerFactory::createControllerObject($url);
}
