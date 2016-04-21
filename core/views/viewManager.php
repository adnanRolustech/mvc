<?php

/**
 * ViewManager file for rendring views
 */

/**
 * ViewManager class for basic functions of views and 
 * viewManager interface implemeted on it
 */
class viewManager implements viewManagerInterface {

    /**
     * For saving variables
     * @abstract
     */  
    protected $variables;
    
    /**
     * For saving view name
     * @abstract
     */      
    public $view;
    
    /**
     * For saving layout name
     * @abstract
     */      
    public $layout;
    
    /**
     * For checking autoRender true false
     * @abstract
     */      
    public $autoRender = true;

    /**
     * Getting variable name and values
     * and assigning values to ViewManager class variable
     * with index of variable name.
     * @access public
     * @param string $name Containing view name
     */      
    public function __get($name) {
        $this->variables[$name];
    }

    /**
     * Setting variable name and values
     * and assigning values to name to ViewManager class variable
     * with index of variable name.
     * @access public
     * @param string $name Containing view name
     * @param array $value containing variables array
     */    
    public function __set($name, $value) {
        $this->variables[$name] = $value;
    }    
    
    /**
     * Getting variable name and values
     * and assigning values to ViewManager class variable
     * with index of variable name.
     * @access public
     * @param string $view Containing view name
     * @param array $value containing variables array
     * @return void
     */
    public function callView($view) {
        if (file_exists(APP_VIEW_PATH . $view . '.php')) {
            $this->view = $view;
        }
        $view = !empty($view) ? $view : 'home';
        if ($this->autoRender == true) {
            $layout = !empty($this->layout) ? $this->layout : 'default';
            $this->render($layout);
        }           
    }     

    /**
     * Function to include error page with error message
     * @access public
     * @param string $errorMessage Containing error message
     * @return void
     */
    public static function errorPage($errorMessage) {
        ini_set('display_errors', 'Off');
        include APP_VIEW_PATH . 'error.php';           
    }    
    
    /**
     * Getting layout file name as input and
     * including this layout file
     * @access public
     * @param string $layoutFile Containing layout file name
     * @return void
     */
    public function render($layoutFile) {
        $this->variables;
        include (APP_VIEW_PATH . 'layouts' . DS . $layoutFile . '.php');            
    }
    
    /**
     * Getting layout file name as input and
     * including this layout file
     * @access public
     * @param string $viewFile Containing view file name
     * @return void
     */
    public function renderView($viewFile) {
        $this->variables;
        include (APP_VIEW_PATH . $viewFile . '.php');            
    }    

    /**
     * Extract for making index a variable and including view content
     * @access public
     * @return void
     */
    public function fetch() {
        include (APP_VIEW_PATH . $this->view . '.php');            
    }
    
    /**
     * Making form fields from table name and its data
     * @access public
     * @param string $model Having Model Name
     * @param array $data
     * @return void
     */    
    public function getTableFields($model, $data = null) {
        $fields = array();
        foreach (metadata::$tables as $key => $value) {
            if ($key == $model) {
                foreach ($value as $index => $type) {
                    if($index == 'id') {            
                        $fields[] = '<input type="hidden" name="'.$index.'" value="'.$data[$index].'">';
                    } elseif($type == 'string') {
                        $fields[] = '<input type="text" name="'.$index.'" value="'.$data[$index].'" placeholder="'.$index.'">';
                    }
                } 
            }
        }
        return $fields;
    } 
    
    /**
     * Making list of fields from table
     * @access public
     * @param string $model Having Model Name     
     * @return void
     */    
    public function getFieldsList($model) {
        $fields = array();
        foreach (metadata::$tables as $key => $value) {
            if ($key == $model) {
                foreach ($value as $index => $type) {           
                    $fields[] = $index;
                } 
            }
        }
        return $fields;
    }     
}
