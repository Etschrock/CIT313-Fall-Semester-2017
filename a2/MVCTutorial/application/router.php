<?php
//auto loader
/*
function autoLoad($class) {
    include 'controllers/' . $class . '.class.php';
    include 'models/' . $class . '.class.php';
    include $class . '.class.php';
}
spl_autoload_register('autoLoad');
*/

require 'autoloader.class.php';

//instantiate a controller object
new Controller();

