<?php

/**
 * Base Model file as parent of models
 */

/**
 * Base model is inherited with database class this class
 * making relationship between user models and database class
 */
class baseModel extends dbal {

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
    
    /**
     * Query for fetching all data of a table
     * @access public
     * @return array
     */
    public function getData() {
        return $this->get();
    }   
    
    /**
     * Query for saving data
     * @access public
     * @param string $data Containing view name
     * @return boolean
     */
    public function saveData($data) {
        return $this->insert($data);
    }  

    /**
     * Query for fetching data with id
     * @access public
     * @param integer $id Containing id
     * @return array
     */
    public function getDataById($id) {
        return $this->where('id', '=', $id)->get();
    }

    /**
     * Query for deleting data with id
     * @access public
     * @param string $id Containing id
     * @return boolean
     */
    public function deleteData($id) {
        return $this->where('id', '=', $id)->delete();
    }

    /**
     * Query for updating data
     * @access public
     * @param array $data Containing array
     * @return array
     */
    public function updateData($data) {
        return $this->set($data)
                ->where('id', '=', $data['id'])
                ->update();
    }    

}
