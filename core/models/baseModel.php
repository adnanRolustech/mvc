<?php

/*
 * Model class making relationship between
 * user models and Sql class
 */

class baseModel extends database {

    protected $table;

    /*
     * Model constructer calling a static function
     * which is creating database connection 
     */

    public function __construct($table) {
        database::dbConnection();
        $this->table = $table;             
    }
    
    /*
     * Query for fetching all data of a table
     */
    public function getData() {
        return $this->get();
    }   
    
    /*
     * Query for saving data
     */
    public function saveData($data) {
        return $this->insert($data);
    }  

    /*
     * Query for fetching data with id
     */
    public function getDataById($id) {
        return $this->where('id', '=', $id)->get();
    }

    /*
     * Query for deleting data with id
     */
    public function deleteData($id) {
        return $this->where('id', '=', $id)->delete();
    }

    /*
     * Query for updating data
     */
    public function updateData($data) {
        return $this->set($data)
                ->where('id', '=', $data['id'])
                ->update();
    }    

}
