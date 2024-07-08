<?php

Class Controller_Ajax extends Controller {
    
    function start ($model_name) {
        $model_name = str_replace('ajax_', '', $model_name);
        include 'application/models/'.$model_name.'.php';
        $this->model = new $model_name();
        $model = $this->model;
        $model->ajax();
    }
    
}

?>