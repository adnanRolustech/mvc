<?php

/**
 * Interface file for base controller implementation
 */

/**
 * This interface defining functions for base controller.
 */
interface controllerInterface {
    

    /**
     * Defining constructor
     * @access public
     */       
    public function __construct();

    /**
     * Function for rendring view
     * @access public
     * @param object $conrollerObject containing controller object
     * @param array $url
     */     
    public static function callAction($conrollerObject,$url);

    /**
     * Index function for rendring home page.
     * @access public
     */     
    public function index();
 
    /**
     * Set function for rendring view
     * @access public
     * @param string $view Containing view name
     * @param array $value Containing variables array
     */     
    public function set($view, $value);

    /**
     * Function for loading model
     * @access public
     * @param string $model Containing model name
     */     
    public function loadModel($model) ;

    /**
     * Function for Redirect to given url
     * @access public
     * @param string $url Containing url
     */     
    public function redirect($url);   
    
    /**
     * Dashboard page for listing data
     * @access public
     */     
    public function dashboard();

    /**
     * Function for saving data
     * @access public
     */     
    public function add();

    /**
     * Function for rendring edit view and its data updation
     * @access public
     */     
    public function edit();

    /**
     * Function for deleting data
     * @access public
     */     
    public function delete();    

    /**
     * Destructer of controller class to destroy objects
     * @access public
     */     
    public function __destruct();    
    
}
