<?php

/**
 * Database Interface file defining functions of database class
 */

/**
 * Database Interface for defining which methods database class must implement
 */
interface dbalInterface {


    /**
     * Fetching data from database and making array of data
     * @access public
     * @param string $query Containing query string
     * @return void
     */
    public function myQuery($query = null); 

    /**
     * Making complete select query that taking fields
     * as input and fetching data from database
     * @access public
     * @param array $fields Containing fielse array
     * @return void
     */
    public function get($fields = '*');

    /**
     * inserting data in database
     * @access public
     * @param array $values Containing values array
     * @return void
     */
    public function insert(array $values);

    /**
     * Making update query for updating data in database
     * @access public
     * @return void
     */
    public function update();

    /**
     * Making delete query for deleting data from database
     * @access public
     * @return void
     */
    public function delete();

    /**
     * Setting values for a query
     * @access public
     * @param array $values Containing values array
     */
    public function set($values);

    /**
     * Making where condition for a query
     * @access public
     * @param string $field Containing field name
     * @param string $opr Containing operator
     * @param string $val Containing value
     * @return void
     */
    public function where($field, $opr, $val);

    /**
     * Making limit for a query
     * @access public
     * @param string $value Containing limit
     * @return void
     */
    public function limit($value);

    /**
     * Making order of a query
     * @access public
     * @param string $value Containing order
     * @return void
     */
    public function orderBy($value);

}
