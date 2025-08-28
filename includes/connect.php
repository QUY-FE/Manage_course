<?php
if(!defined('QUYFE')){
    die('Truy cập không hợp lệ, Vui lòng quay lại Trang chủ !!!');
}

try {
    if(class_exists('PDO')) {
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAME utf8", // Hỗ trợ tiếng việt
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Đẩy lỗi vào ngoại lệ
        );
        $conn = new PDO("mysql:host=$host; dbname=$dbname", $user_db, );
    }
} catch (\Throwable $th) {
    //throw $th;
}