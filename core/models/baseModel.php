<?php

/**
 * Base Model file as parent of models
 */

/**
 * Base model is inherited with database class this class
 * making relationship between user models and database class
 */
class baseModel extends orm {

    /**
     * For saving variables
     * @abstract
     */  
    protected $table;

    
    /**
     * Model constructer calling a static function
     * which is creating database connection 
     * @access public
     * @param string $table Containing table name
     * @return void
     */
    public function __construct($table) {
        database::dbConnection();
        $this->table = $table;             
    }
}
