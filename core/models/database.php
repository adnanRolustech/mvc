<?php

/**
 * Database Model file as parent of base model
 */

/**
 * Database model is for making database connction and making general queries
 * database interface implemented on it
 */
class database {

    /**
     * For saving db connection object
     * @abstract
     */      
    private static $dbConnection = null;

    
    /**
     * private constructer for creating connection with database
     * @access private
     * @return void
     */
    private function __construct() {}

    /**
     * Function to creating a database connection using Singleton
     * @access protected
     * @return object db connection object
     */
    public static function dbConnection() {
        if (self::$dbConnection == null) {
            self::$dbConnection = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);
            if(!empty(self::$dbConnection->connect_error)) {
                viewManager::errorPage(self::$dbConnection->connect_error); exit;
            }                
        }
        return self::$dbConnection;        
    }

    /**
     * Stopping Clonning of Object
     * @access private
     */
    private function __clone() {
        
    }

    /**
     * Stopping unserialize of object
     * @access private
     */
    private function __wakeup() {
        
    }
}
