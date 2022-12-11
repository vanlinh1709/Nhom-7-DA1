<?php

function construct($action_name = '') {
    request_auth(false);
    load_model('index');
}

function indexAction() {
//    request_auth(false);
    $notifications = get_notification();
//    var_dump($notifications);
//    die();
    load_view('index', [
        "notifications" => $notifications
    ]);
}

function indexPostAction() {
    // validation
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username) || empty($password)) {
        push_notification('danger', ['Vui lòng nhập đầy đủ thông tin tài khoản và mật khẩu']);
        header('Location: ?role=admin&mod=auth');
        die();
    }
    // xử lý đăng nhập
    $auth = get_auth_user($username, $password);
    if ($auth) {
        push_auth($auth);
//        var_dump($_SESSION['auth'];
//        echo '1';
        header('Location: ?role=admin');//Chạy về modules home
    } else {
        push_notification('danger', ['Tài khoản hoặc mật khẩu không chính xác']);
        header('Location: ?role=admin&mod=auth');
        die();
    }
}
