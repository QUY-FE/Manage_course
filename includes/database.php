<?php
if(!defined('_QUYFE')){
    die('Truy cập không hợp lệ, Vui lòng quay lại Trang chủ !!!');
}
// Hàm truy vấn tất cả dữ liệu
function getAll($sql) {
    global $conn;

    $stm = $conn -> prepare($sql);

    $stm -> execute();

    $result = $stm -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// Lay số lượng dòng
function getRowsCount($sql) {
    global $conn;
    $stm = $conn -> prepare($sql);
    $stm -> execute();
    $count = $stm -> rowCount();
    return $count;
}

// Truy vấn 1 dữ liệu
function getOne($sql) {
    global $conn;

    $stm = $conn -> prepare($sql);

    $stm -> execute();

    $result = $stm -> fetch(PDO::FETCH_ASSOC);
    return $result;
}
// Ham them du lieu
function create($table,$data){
    global $conn;
    $keys = array_keys($data);
    $colum = implode(',',$keys);
    $place = ':'.implode(',:',$keys);
    $sql = "INSERT INTO $table ($colum) VALUES ($place)";
    
    $stm = $conn -> prepare($sql);
    $stm -> execute($data);
}
// ham cap nhat du lieu
function update($table, $data,$condition = '') {
    global $conn;
    $update = '';
    foreach($data as $key => $value) {
        $update .= $key .'=:'. $key .',';
    }
    $update =rtrim($update,',');
    if(!empty($condition)) {
        $sql = "UPDATE $table SET $update WHERE $condition";
    } else {
        $sql = "UPDATE $table SET $update";
    }
    
    $stm = $conn -> prepare($sql);
    $stm -> execute($data);
    
}
// Ham xoa du lieu
function delete($table,$condition = '') {
    global $conn;

    if(!empty($condition)) {
        $sql = "DELETE FROM $table WHERE $condition";
    } else {
        $sql = "DELETE FROM $table";
    }
   
    $stm = $conn -> prepare($sql);
    $stm -> execute();
}


// ham lay id vua moi them
function getLastId() {
    global $conn;
    return $conn -> lastInsertId();
}