<?php

class Router {
    
    static function start() {
        $controller_name = 'index';
        $action_name = 'main';
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        if ( !empty($routes[1]) ) {
            $routes[1] = database::String($routes[1]);
            $controller_name = $routes[1];
        }
        if ( !empty($routes[2]) ) {
            $routes[2] = database::String($routes[2]);
            $action_name = $routes[2];
        }
        
        $model_name = $controller_name.'_'.$action_name;
        $model_file = strtolower($model_name).'.php';
        $model_path = "application/models/".$model_file;
        if(file_exists($model_path)) include $model_path;
        
        $controller_file = 'controller_'.strtolower($controller_name).'.php';
        $controller_path = "application/controllers/".$controller_file;
        if(file_exists($controller_path)) include "application/controllers/".$controller_file;
        
        $controller_name = 'Controller_'.$controller_name;
        $controller = new $controller_name();
        $controller->start($model_name);
    }
}

?>