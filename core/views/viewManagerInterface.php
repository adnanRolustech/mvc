<?php

/*
 * viewManager Interface for defining which methods viewManager class must implement
 */

interface viewManagerInterface {

    
    /*
     * callView function defination
     */
    public function callView($view, $value);   

    /*
     * Function to include error page with error message
     */
    public static function errorPage($errorMessage);   
    
    /*
     * Getting layout file name as input and
     * including this layout file
     */
    public function render($layoutFile);
    
    /*
     * Getting layout file name as input and
     * including this layout file
     */
    public function renderView($viewFile);    

    /*
     * Extract for making index a variable and including view content
     */
    public function fetch();
}
