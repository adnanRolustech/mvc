<?php

/*
 * This is a base controller
 * all controllers are inherited with this controller
 * basic functions for rendring view and loading models are in this controller
 */

class baseController implements controllerInterface {

    protected $template;
    private $model;
    protected $controller;


    /*
     * Constructer of Controller class
     * creating new object of ViewManager class
     */
    public function __construct() {
        $this->template = new viewManager();
        $this->template->controller = str_replace('Controller','',get_class ($this));
        $this->model = modelFactory::createModelObject($this->template->controller);
    }
    
    /*
     * Function for rendring view
     */
    public static function callAction($conrollerObject,$url) {
        if (method_exists($url['controller'], $url['action'])) {
            $conrollerObject->$url['action']();
        } else {
            viewManager::errorPage('Sorry! requested action not found');
        }            
    }    
    
    /*
     * Index function for rendring home page.
     */
    public function index() {
        $this->set('home', null);
    }       

    /*
     * Getting view name and variables
     * checking view exists or not if exists than store it in a variable
     * and calling set function of ViewManager class if varible value not empty
     */
    public function set($view, $value) {
        $this->template->callView($view, $value);            
    }

    /*
     * Getting model name as input
     * calling modelFactory method for creating its object
     */
    public function loadModel($model) {
        $this->$model = modelFactory::createModelObject($model);            
    }

    /*
     * Redirection method to redirect to given url
     */
    public function redirect($url) {
        $url = ($url) ? $url : BASE_URL;
        header('Location: ' . $url);             
    }
    
    /*
     * Dashboard page for listing data
     */
    public function dashboard() {
        $data = $this->model->getData();
        $this->set('general/list', $data);
    }
    
    /*
     * Function for saving data
     */    
    public function add() {
        if (!empty($_POST)) {
            $is_added = $this->model->saveData($_POST);
            $this->redirect(BASE_URL . "/".$this->template->controller."/dashboard");
        } else {
            $this->set('general/add', null);
        }
    } 
    
    /*
     * Function for rendring edit view and its data updation
     */
    public function edit() {
        if (!empty($_POST)) {
            $is_updated = $this->model->updateData($_POST);
            $this->redirect(BASE_URL . "/".$this->template->controller."/dashboard");
        } else {
            $id = !empty($_GET['id']) ? $_GET['id'] : null;
            $data = $this->model->getDataById($id);
            $this->set('general/edit', $data);
        }
    }  
    
    /*
     * Function for deleting data
     */
    public function delete() {
        $id = !empty($_GET['id']) ? $_GET['id'] : null;
        $is_deleted = $this->model->deleteData($id);
        $this->redirect(BASE_URL . "/".$this->template->controller."/dashboard");
    }    

    /*
     * Destructer of controller class to destroy objects
     */
    public function __destruct() {}

}
