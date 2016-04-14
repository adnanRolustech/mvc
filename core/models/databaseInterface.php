<?php

/*
 * database Interface for defining which methods database class must implement
 */

interface databaseInterface {


    /*
     * Fetching data from database and making array of data
     */
    public function myQuery($query = null); 

    /*
     * Making complete select query that taking fields
     * as input and fetching data from database
     */
    public function get($fields = '*');

    /*
     * inserting data in database
     */
    public function insert(array $values);

    /*
     * Making update query for updating data in database
     */
    public function update();

    /*
     * Making delete query for deleting data from database
     */
    public function delete();

    /*
     * Setting values for a query
     */
    public function set($values);

    /*
     * Making where condition for a query
     */
    public function where($field, $opr, $val);

    /*
     * Making limit for a query
     */
    public function limit($value);

    /*
     * Making order of a query
     */
    public function orderBy($value);

}
