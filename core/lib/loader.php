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

/*
 * Calling factory method for creating objects
 */
controllerFactory::createControllerObject();
