<?php
if(!defined('QUYFE')){
    die('Truy cập không hợp lệ, Vui lòng quay lại Trang chủ !!!');
}

try {
    if(class_exists('PDO')) {
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAME utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Đẩy lỗi vào ngoại lệ
        )
    }
} catch (\Throwable $th) {
    //throw $th;
}