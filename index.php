<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
  
if(session_id() == '') session_start();
  
function autoLoader($name) {
    $name = strtolower($name);
    require_once 'application/classes/'.$name.'.php';
}

spl_autoload_register('autoLoader');

require_once 'application/core/model.php';
require_once 'application/core/view.php';
require_once 'application/core/controller.php';
require_once 'application/core/router.php';

router::start();

?>