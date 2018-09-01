<?php
if(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == ""){
    $redirect = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: $redirect");
}

//ERRORS
ini_set('display_errors', 1);
error_reporting(E_ALL);

//include php
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Router.php');

//db
require_once (ROOT.'/components/Db.php');

//router

$router = new Router();
$router->run();