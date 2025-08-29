<?php
if(!defined('_QUYFE')){
    die('Truy cập không hợp lệ, Vui lòng quay lại Trang chủ !!!');
}


try {
    if(class_exists('PDO')) {
        $options = array(
            // PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAME utf8", // Hỗ trợ tiếng việt
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,// Đẩy lỗi vào ngoại lệ
        );
        $dsn = _driver.":host="._host."; dbname="._db;
        $conn = new PDO($dsn, _user ,_password , $options );
    }
    
} catch (Exception $ex) {

    echo 'Lỗi Kết nối'. $ex->getMessage();
    require_once './modules/Error/404.php';
    die();
}