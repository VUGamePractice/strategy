<?php
/**
 * Created by PhpStorm.
 * User: tautvis
 * Date: 14.11.24
 * Time: 14.49
 */

// Holds data like $baseUrl etc.
include 'config.php';

$requestUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$requestString = substr($requestUrl, strlen($baseUrl));

$urlParams = explode('/', $requestString);

$controllerName = ucfirst(array_shift($urlParams)).'Controller';
$actionName = strtolower(array_shift($urlParams)).'Action';

// Here you should probably gather the rest as params

// Call the action
$controller = new $controllerName;
$controller->$actionName();