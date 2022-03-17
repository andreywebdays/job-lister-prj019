<?php
// config file
require_once 'config.php';

// autoloader
spl_autoload_register('myAutoLoader');

function myAutoLoader ($class_name) 
{
    require_once 'classes/' . $class_name . '.php';
}