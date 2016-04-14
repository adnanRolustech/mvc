<?php

/**
 * Factory model file for factory purpose
 */

/**
 * Factory model for creating objects of all models and including files of models
 */
class modelFactory {    
    
    /**
     * Function for creating objects of model classes 
     * @access public
     * @param string $model Containing view name
     * @return object
     */
    public static function createModelObject($model) {
        modelFactory::loadModels($model);
        $tableName = $model . 's';
        return new $model($tableName);            
    }
    
    /**
     * Function for loading models
     * @access public
     * @param string $model Containing view name
     * @return void
     */    
    public static function loadModels($model) { 
        require_once ROOT . DS . 'core' . DS . 'models' . DS . 'databaseInterface.php'; 
        require_once ROOT . DS . 'core' . DS . 'models' . DS . 'database.php';
        require_once ROOT . DS . 'core' . DS . 'models' . DS . 'baseModel.php';         
        if(file_exists(ROOT . DS . 'app' . DS . 'models' . DS . $model . '.php')){ 
            require_once ROOT . DS . 'app' . DS . 'models' . DS . $model . '.php';
        }         
    }

}
