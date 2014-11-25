<?php
/**
 * Created by PhpStorm.
 * User: tautvis
 * Date: 14.11.24
 * Time: 14.49
 */

// Holds data like $baseUrl etc.
//include '/var/www/game.com/config/config.php';
//include '/var/www/game.com';
include '/var/www/game.com/controllers/Index.php';

//$requestUrl = 'http://'.$_SERVER['game.localhost'].$_SERVER['/'];
//echo $_SERVER['HTTP_HOST'];
//echo $_SERVER['REQUEST_URI'];
//$requestString = substr($requestUrl, strlen($baseUrl));

//$urlParams = explode('/', $requestString);

$controllerName = ucfirst(array_shift($urlParams)).'Controller';
$actionName = strtolower(array_shift($urlParams)).'Action';

// Here you should probably gather the rest as params

// Call the action
$controller = new $controllerName;
$controller->$actionName();