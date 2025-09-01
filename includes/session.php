<?php
if(!defined('_QUYFE')){
    die('Truy cập không hợp lệ, Vui lòng quay lại Trang chủ !!!');
}
// set session
function setSission($key,$value) {
    if(!empty(session_id())) {
        $_SESSION[$key] = $value;
        return true;
    }
    return false;
}

// get session
function getSission($key = '') {
    if(!empty($key)) {
        return $_SESSION;
    } else {
        if(isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }
    return false;
}

function deleteSission($key) {
    if(empty($key)) {
        session_destroy();
        return true;
    } else {
        if(isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
        return true;
    }
    return false;
}


function setSessionFlash($key,$value) {
    $key = $key . '_Flash';
    $result = setSission($key,$value);
    return $result;

}

function getSessionFlash($key) {
    $key = $key . '_Flash';
    $result = getSission($key);
    deleteSission($key);
    return $result;

}