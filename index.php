<?php
/*
 * 2015-03-16
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 */
require 'vendor/autoload.php';
require 'systems/debug.php';

$config=[
    'debug'=>true,
    'templates.path'=>'./templates'
];

$app = new \Slim\Slim($config);

//Debug::printr($app);

$app->get('/', function () {
    echo "Hello World";
});

//$app->config('debug',false);
//Debug::printr($app->container->settings);
//echo $app->config('templates.path');
$app->run();




