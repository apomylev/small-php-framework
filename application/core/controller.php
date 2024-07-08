<?php

class Controller {
    
    public $model;
    public $view;
    
    function start ($model_name) {
        $this->model = new $model_name();
        $this->view = new View();
        $model = $this->model;
        $this->view->generate($model);
    }
    
}

?>