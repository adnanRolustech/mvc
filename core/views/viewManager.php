<?php

/*
 * ViewManager class for
 * basic functions for views
 */

class viewManager implements viewManagerInterface {

    protected $variables;
    public $view;
    public $layout;
    public $autoRender = true;

    
    /*
     * Getting variable name and values
     * and assigning values to ViewManager class variable
     * with index of variable name.
     */
    public function callView($view, $value) {
        if (file_exists(APP_VIEW_PATH . $view . '.php')) {
            $this->view = $view;
        }
        $this->variables = !empty($value) ? $value : array();
        $view = !empty($view) ? $view : 'home';
        if ($this->autoRender == true) {
            $layout = !empty($this->layout) ? $this->layout : 'default';
            $this->render($layout);
        }           
    }     

    /*
     * Function to include error page with error message
     */
    public static function errorPage($errorMessage) {
        include APP_VIEW_PATH . 'error.php';           
    }    
    
    /*
     * Getting layout file name as input and
     * including this layout file
     */
    public function render($layoutFile) {
        include (APP_VIEW_PATH . 'layouts' . DS . $layoutFile . '.php');            
    }
    
    /*
     * Getting layout file name as input and
     * including this layout file
     */
    public function renderView($viewFile) {
        include (APP_VIEW_PATH . $viewFile . '.php');            
    }    

    /*
     * Extract for making index a variable and including view content
     */
    public function fetch() {
        include (APP_VIEW_PATH . $this->view . '.php');            
    }
}
