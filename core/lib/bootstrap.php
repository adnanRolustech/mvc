<?php

/*
 * Defining constants
 */
define("ROOT", dirname(dirname(__DIR__)));
define("DS", '/');
define("APP_VIEW_PATH", ROOT . DS . 'app' . DS . 'views' . DS);

/*
 * including config file
 */
require_once '../app/config.php';

/*
 * Defining images, css and js paths
 */

define('IMAGE_URL', BASE_URL . DS . 'public' . DS . 'images' . DS);
define('CSS_URL', BASE_URL . DS . 'public' . DS . 'css' . DS);
define('JS_URL', BASE_URL . DS . 'public' . DS . 'js' . DS);

/*
 * including start.php file
 */
require_once 'loader.php';
