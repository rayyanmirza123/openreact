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

if(is_file('/app/Engine/Startup.php'))
{
    require '/app/Engine/Startup.php';
}

start('admin');
