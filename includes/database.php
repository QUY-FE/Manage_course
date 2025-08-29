<?php
if(!defined('_QUYFE')){
    die('Truy cập không hợp lệ, Vui lòng quay lại Trang chủ !!!');
}
// Hàm truy vấn dữ liệu
function getAll($sql) {
    global $conn;

    $stm = $conn -> prepare($sql);

    $stm -> execute();

    $result = $stm -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}