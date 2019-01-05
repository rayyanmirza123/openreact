<?php
error_reporting(E_ALL);
/* 
 *  Damn Straight now copying only buying.
 */
$registry = new Registry();
$config  = new Config();
$config->load($param);
$registry->set('config',$config);

$loader = new Loader($registry);
$registry->set('load',$loader);
$registry->set('request',new Request());

$response = new Response();
$response->addHeader('Content-Type: text/html; charset=utf-8');
$response->setCompression($config->get('response_compression'));
$registry->set('response',$response);
if(!$config->get('default'))
{
    echo "Error \\";
    exit();
}

$default = $config->get('default');


$registry->get('load')->controller($default);

//$registry->get('load')->getMethod();



