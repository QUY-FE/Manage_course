<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start();
ob_start();

require_once 'config.php';

$module = _Module;
$action = _action;

if(!empty($_GET["module"])) {
    $module = $_GET["module"];
}

if(!empty($_GET["action"])) {
    $action = $_GET["action"];
}

$path = 'modules/' . $module .'/' . $action . '.php'; 

echo $path;

if (!empty($path)) {
    if(file_exists($path)) {
        require_once $path;
    } else {
        require_once './modules/Error/404.php';
    }
} else {
    require_once './modules/Error/500.php';
} 