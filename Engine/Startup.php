<?php

/* 
 *  Damn Straight now copying only buying.
 */

require 'Main/Controller.php';
require 'Main/Registry.php';
require 'Main/Config.php';
require 'Main/Loader.php';
require 'Main/Action.php';

function Library($class) {
	$file = '/app/Engine/Library/' . str_replace('\\', '/', $class) . '.php';
	if (is_file($file)) {
		include_once($file);
		return true;
	} else {
		//echo $file;
		return false;
	}
}

function Framework($class)
{
$file = '/app/Engine/Framework/' . str_replace('\\', '/', $class) . '.php';
	echo $file;
	if (is_file($file)) {
		include_once($file);
		return true;
	} else {
		//echo $file;
		return false;
	}	
}


spl_autoload_register('Library');
spl_autoload_register('Framework');

spl_autoload_extensions('.php');

function start($param)
{
    $route = $_SERVER['REQUEST_URI'];
    require_once 'Framework.php';
}
