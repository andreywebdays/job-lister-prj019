<?php
// start session
session_start();

// config file
require_once 'config.php';

// helper file
require_once 'helpers/helper.php';

// autoloader
spl_autoload_register('myAutoLoader');

function myAutoLoader ($class_name) 
{
    require_once 'classes/' . $class_name . '.php';
}