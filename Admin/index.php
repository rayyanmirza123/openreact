<?php

/*
 *  Damn Straight now copying only buying.
 */

/**
 * Description of index
 *
 * @author Rayyan
 */

if(is_file('config.php'))
{
    require_once('config.php');
}
echo DIR_MAIN;
if(is_file(DIR_ENGINE.'Startup.php'))
{
    require DIR_ENGINE.'Startup.php';
}

start('admin');
