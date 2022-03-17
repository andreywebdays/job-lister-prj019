<?php
// config file
require_once 'config.php';

// autoloader
spl_autoload_register('myAutoLoader');

function myAutoLoader ($class_name) 
{
    require_once 'library/' . $class_name . '.php';
}