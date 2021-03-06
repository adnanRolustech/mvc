<?php

/**
 * Base controller file is parent file of all controllers
 */

/**
 * Having base functions which are necessary for mvc as well as some generic 
 * functions for other controllers use and controller interface implemented on it
 */
class baseController implements controllerInterface {

    /**
     * For saving view manager object
     * @abstract
     */    
    protected $template;   
    
    /**
     * For saving current class model object
     * @abstract
     */       
    private $model;

    /**
     * Constructer of Controller class
     * creating new object of ViewManager class
     * @access public
     * @return void
     */
    public function __construct() {
        $this->template = new viewManager();
        $this->controller = str_replace('Controller','',get_class ($this));
        $this->template->controller = $this->controller;
        if($this->controller != 'base') {
            $this->model = modelFactory::createModelObject($this->controller);            
        }
    }
    
    /**
     * Function for calling view
     * @access public
     * @param object $conrollerObject containing controller object
     * @param array $url
     * @return void
     */
    public static function callAction($conrollerObject, $url) {
        if (method_exists($url['controller'], $url['action'])) {
            $conrollerObject->$url['action']();
        } else {
            viewManager::errorPage('Sorry! requested action not found');
        }            
    }    
    
    /**
     * Index function for rendring home page.
     * @access public
     * @return void
     */
    public function index() {
        $this->set('home', null);
    }       

    /**
     * Getting view name and variables
     * checking view exists or not if exists than store it in a variable
     * and calling set function of ViewManager class if varible value not empty
     * @access public
     * @param string $view Containing view name
     * @param array $value Containing variables array
     * @return void
     */
    public function set($view) {
        $this->template->callView($view);            
    }

    /**
     * Getting model name as input
     * calling modelFactory method for creating its object
     * @access public
     * @param string $model Containing model name
     */
    public function loadModel($model) {
        $this->$model = modelFactory::createModelObject($model);            
    }

    /**
     * Redirection method to redirect to given url
     * @access public
     * @param string $url Containing url
     */
    public function redirect($url) {
        $url = ($url) ? $url : BASE_URL;
        header('Location: ' . $url);             
    }
    
    /**
     * listings page for listing data
     * @access public
     */
    public function listings() {
        $data = $this->model->getData();
        $this->template->data = $data;
        $this->set('general/list');
    }
    
    /**
     * Function for saving data
     * @access public
     */    
    public function add() {
        if (!empty($_POST)) {
            $is_added = $this->model->saveData($_POST);
            $this->redirect(BASE_URL . "/".$this->controller."/listings");
        } else {
            $this->set('general/add');
        }
    } 
    
    /**
     * Function for rendring edit view and its data updation
     * @access public
     */
    public function edit() {
        if (!empty($_POST)) {
            $is_updated = $this->model->updateData($_POST);
            $this->redirect(BASE_URL . "/".$this->controller."/listings");
        } else {
            $id = !empty($_GET['id']) ? $_GET['id'] : null;
            $data = $this->model->getDataById($id);
            $this->template->data = $data;
            $this->set('general/edit');
        }
    }  
    
    /**
     * Function for deleting data
     * @access public
     */
    public function delete() {
        $id = !empty($_GET['id']) ? $_GET['id'] : null;
        $is_deleted = $this->model->deleteData($id);
        $this->redirect(BASE_URL . "/".$this->controller."/listings");
    }    

    /**
     * Destructer of controller class to destroy objects
     * @access public
     */
    public function __destruct() {}

}
