<?php

/**
 * View Manager Interface file
 */

/**
 * viewManager Interface for defining which methods viewManager class must implement.
 */
interface viewManagerInterface {

    
    /**
     * callView function defination
     * @access public
     * @param string $view Containing view name
     * @param array $value containing variables array
     * @return void
     */
    public function callView($view, $value);   

    /**
     * Function to include error page with error message
     * @access public
     * @param string $errorMessage Containing error message
     * @return void
     */
    public static function errorPage($errorMessage);   
    
    /**
     * Getting layout file name as input and
     * including this layout file
     * @access public
     * @param string $layoutFile Containing layout file name
     * @return void
     */
    public function render($layoutFile);
    
    /**
     * Getting layout file name as input and
     * including this layout file
     * @access public
     * @param string $viewFile Containing view file name
     * @return void
     */
    public function renderView($viewFile);    

    /**
     * Extract for making index a variable and including view content
     * @access public
     * @return void
     */
    public function fetch();
}
