<?php

/* 
 *  Damn Straight now copying only buying.
 */

$main = (isset($_SERVER['HTTPS'])?"https://":"http://").$_SERVER['SERVER_NAME'];

define('DIR_MAIN',$main);
define('DIR_ENGINE',DIR_MAIN."/Engine/");
define('DIR_ADMIN',DIR_MAIN."/Admin/");
define('DIR_CONFIG',DIR_ENFINE."Config/");

