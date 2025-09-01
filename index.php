<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start();
ob_start();


require_once 'config.php';
require_once './includes/connect.php';
require_once './includes/database.php';
require_once './includes/session.php';

setSessionFlash('quyfe3', 'PHP_Web_2025');
$a = getSessionFlash('quyfe3');
echo $a;
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

// Kiem tra module va action tren url
$module = _module;
$action = _action;
if(!empty($_GET["module"])) {                                                                                                   
    $module = $_GET["module"];
}

if(!empty($_GET["action"])) {
    $action = $_GET["action"];
}

$path = 'modules/' . $module .'/' . $action . '.php'; 

if (!empty($path)) {
    if(file_exists($path)) {
        require_once $path;
    } else {
        require_once './modules/Error/404.php';
    }
} else {
    require_once './modules/Error/500.php';
} 

?>
