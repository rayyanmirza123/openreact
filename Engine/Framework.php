<?php
error_reporting(E_ALL);
/* 
 *  Damn Straight now copying only buying.
 */
$registry = new Registry();
$config  = new Config();
$react_source = '/Framework/Node/react_bundle/react-bundle.js';
$config->load($param);
$registry->set('config',$config);

$loader = new Loader($registry);
$registry->set('load',$loader);
$registry->set('request',new Request());

$response = new Response();
$response->addHeader('Content-Type: text/html; charset=utf-8');
$response->setCompression($config->get('response_compression'));
$registry->set('response',$response);
$react = new ReactJS($react_source,'/app/Admin/Js/table.js');


if(!$config->get('default'))
{
    echo "Error \\";
    exit();
}

$default = $config->get('default');


$registry->get('load')->controller($default);

//$registry->get('load')->getMethod();



