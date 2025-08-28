<?php
const _QUYFE = true;

const _Module = 'dashboard';
const _action = 'index';
// Khai báo Database
const _host = 'localhost';
const _db = 'php_web';
const _user = 'root';
const _password = '';
const _driver = 'mysql';

// debug error
const _Debug = true;

// thiết lập host
define('_Host_url', 'http://' .$_SERVER['HTTP_HOST'] . '/manager_courses' );
define('_Host_url_templates', 'http://' .$_SERVER['HTTP_HOST'] . '/manager_courses/templates' );


// thiet lap path
define('_Path_url', __DIR__);
define('_Path_url_templates', __DIR__ . '/templates');