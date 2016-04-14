<?php

/*
 * controllerInterface defining which methods base class must implement
 */

interface controllerInterface {
    

    /*
     * Defining constructor
     */
    public function __construct();
    
    /*
     * Function for rendring view
     */
    public static function callAction($conrollerObject,$url);
    
    /*
     * Index function for rendring home page.
     */
    public function index();
    
    /*
     * Set function for rendring view
     */
    public function set($view, $value);
    
    /*
     * Function for loading model
     */
    public function loadModel($model) ;
    
    /*
     * Function for Redirect to given url
     */
    public function redirect($url);   
    
    /*
     * Dashboard page for listing data
     */
    public function dashboard();
    
    /*
     * Function for saving data
     */    
    public function add();
    
    /*
     * Function for rendring edit view and its data updation
     */
    public function edit();
    
    /*
     * Function for deleting data
     */
    public function delete();    

    /*
     * Destructer of controller class to destroy objects
     */
    public function __destruct();    
    
}
