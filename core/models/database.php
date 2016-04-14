<?php

/*
 * database class for making database connction
 * and DBAL
 */

class database implements databaseInterface {

    private static $dbConnection = null;
    private $condition = '';
    private $limit = '';
    private $orderBy = '';
    private $set = '';
    public $last_inserted_id = '';

    
    /*
     * private constructer for creating connection with database
     */
    private function __construct() {}

    /*
     * Function to creating a database connection using Singleton
     */
    protected static function dbConnection() {
        if (self::$dbConnection == null) {
            self::$dbConnection = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);
            if(!empty(self::$dbConnection->connect_error)) {
                viewManager::errorPage(self::$dbConnection->connect_error); exit;
            }                
        }
        return self::$dbConnection;        
    }

    /*
     * Stopping Clonning of Object
     */
    private function __clone() {
        
    }

    /*
     * Stopping unserialize of object
     */
    private function __wakeup() {
        
    }

    /*
     * Fetching data from database and making array of data
     */
    public function myQuery($query = null) {
        $data = array();
        if (!empty($query)) {
            $result = mysqli_query(self::$dbConnection, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;             
    }
    
    /*
     * Query execution and returning true on seccess and false on failure. 
     */
    private function executeQuery($query) {
        //Reset $this->condition, $this->limit, $this->set and $this->orderBy variables.
        $this->resetValues();
        if (mysqli_query(self::$dbConnection, $query)) {
            $this->last_inserted_id = self::$dbConnection->insert_id;
            return TRUE;
        } else {
            return "Error: " . $query . "<br>" . mysqli_error(self::$dbConnection);
        }             
    }    

    /*
     * Making complete select query that taking fields
     * as input and fetching data from database
     */
    public function get($fields = '*') {
        $query = "SELECT $fields FROM " . $this->table
            . (($this->condition) ? ' WHERE ' . $this->condition : '')
            . (($this->limit) ? ' LIMIT ' . $this->limit : '')
            . (($this->orderBy) ? ' ORDER BY ' . $this->orderBy : '');
        return $this->myQuery($query);         
    }

    /*
     * inserting data in database
     */
    public function insert(array $values) {
        $sql = "INSERT INTO {$this->table} (";
        //extract column names from the keys
        $sql.= implode(", ", array_keys($values));
        $sql.= ") VALUES ('";
        //extract values
        $sql.= implode("', '", $values);
        $sql.= "');";
        return $this->executeQuery($sql);             
    }

    /*
     * Making update query for updating data in database
     */
    public function update() {
        $query = "UPDATE $this->table"
            . (($this->set) ? ' SET ' . $this->set : '')
            . (($this->condition) ? ' WHERE ' . $this->condition : '');
        return $this->executeQuery($query);            
    }

    /*
     * Making delete query for deleting data from database
     */
    public function delete() {
        $query = "DELETE FROM " . $this->table
            . (($this->condition) ? ' WHERE ' . $this->condition : '');
        return $this->executeQuery($query);             
    }

    /*
     * Setting values for a query
     */
    public function set($values) {
        if (!empty($values)) {
            $this->set = null;
            foreach ($values as $key => $data) {
                $seprator = empty($this->set) ? '' : ' , ';
                $this->set .= $seprator . $key . "=" . "'" . $data . "'";
            }
        }
        return $this;              
    }

    /*
     * Making where condition for a query
     */
    public function where($field, $opr, $val) {
        $this->condition .=!empty($this->condition) ? ' AND ' . $field . $opr . '"' . $val . '"' : $field . $opr . '"' . $val . '"';
        return $this;         
    }

    /*
     * Making limit for a query
     */
    public function limit($value) {
        $this->limit .= $value;
        return $this;             
    }

    /*
     * Making order of a query
     */
    public function orderBy($value) {
        $this->order .= $value;
        return $this;            
    }

    /*
     * Reset condition, limit and orderBy variables of Sql class.  
     */
    private function resetValues() {
        $this->condition = '';
        $this->limit = '';
        $this->orderBy = '';
        $this->set = '';
    }

}
