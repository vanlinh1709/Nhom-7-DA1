<?php
defined('APPPATH') OR exit('Không được quyền truy cập phần này');

session_start();

// get Controller name
function get_controller() {
    global $config;
    $controller = isset($_GET['controller']) ? $_GET['controller'] : $config['default_controller'];
    return $controller;
}

// get Module name

function get_role() {
    global $config;
    $role = isset($_GET['role']) ? $_GET['role'] : $config['default_role'];
    return $role;
}

function get_module() {
    global $config;
    $module = isset($_GET['mod']) ? $_GET['mod'] : $config['default_module'];
    return $module;
}

//get Action name
function get_action() {
    global $config;
    $action = isset($_GET['action']) ? $_GET['action'] : $config['default_action'];
    return $action;
}
//

/*
 * -------------------------------
 * Load
 * ------------------------------------------------------------------------------------
 * Load các file từ các phân vùng vào hệ thống tham gia xử lý
 * Ví dụ: load('lib','database');
 * ------------------------------------------------------------------------------------
 * GIẢI THÍCH
 * ------------------------------------------------------------------------------------
 * Đầu vào
 * - $type: Loại phân vùng hệ thống: lib, helper...
 * - $name: Tên chức năng được load: database, string...
 * ------------------------------------------------------------------------------------
 */

//function run_module($url, $data_echo = true) {
////    global $config;
//    include  base_url().$url;
////    if (empty($url))
////        return FALSE;
////
////    if ($data_echo) {
////        echo get_data($url);
////    } else {
////        return get_data($url);
////    }
//}

function load($type, $name) {
    if ($type == 'lib')
        $path = LIBPATH . DIRECTORY_SEPARATOR . "{$name}.php";
    if ($type == 'helper')
        $path = HELPERPATH . DIRECTORY_SEPARATOR . "{$name}.php";
    if (file_exists($path)) {
        require "$path";
    } else {
        echo "{$type}:{$name} không tồn tại";
    }
}

/*
 * -----------------------------
 * callFunction
 * -----------------------------
 * Gọi đến hàm theo tham số biến
 */

function call_function($list_function = array()) {
    if (is_array($list_function)) {
        foreach ($list_function as $f) {
            if (function_exists($f())) {
                $f();
            }
        }
    }
}

function load_view($name, $data_send = array()) {
    global $data;
    $data = $data_send;
    $path = MODULESPATH . DIRECTORY_SEPARATOR . get_role() . DIRECTORY_SEPARATOR .  get_module() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $name . 'View.php';
    if (file_exists($path)) {
        if (is_array($data)) {
            foreach ($data as $key_data => $v_data) {
                $$key_data = $v_data;
            }
        }
        require $path;
    } else {
        echo "Không tìm thấy {$path}";
    }
}

function load_model($name) {
    $path = MODULESPATH . DIRECTORY_SEPARATOR . get_role() . DIRECTORY_SEPARATOR .  get_module() . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . $name . 'Model.php';
    if (file_exists($path)) {
        require $path;
    } else {
        echo "Không tìm thấy {$path}";
    }
}
//
function get_info_shop() {
    $sql = 'SELECT * FROM info_shop';
    $info = pdo_query_one($sql);
    return $info;
}

function get_id_by_email($email) {
    $sql = 'SELECT id FROM users WHERE email = ?';
    return pdo_query_one($sql, $email);
}
function get_header($name = '', $title = '') {
    global $data;
    $infoShop = get_info_shop();
    $user['id'] = '';
    if(is_auth() && !is_admin()) {
        $user = get_id_by_email($_SESSION['auth']['email']);
    }
    if (empty($name)) {
        $name = 'header';
    } else {
        $name = "header-{$name}";
    }
    $path = LAYOUTPATH . DIRECTORY_SEPARATOR . $name . '_' . get_role() . '.php';
    if (file_exists($path)) {
        if (is_array($data)) {
            foreach ($data as $key => $a) {
                $$key = $a;
            }
        }
        require $path;
    } else {
        echo "Không tìm thấy {$path}";
    }
}

function get_footer($name = '') {
    global $data;
    $infoShop = get_info_shop();
    if (empty($name)) {
        $name = 'footer';
    } else {
        $name = "footer-{$name}";
    }
    $path = LAYOUTPATH . DIRECTORY_SEPARATOR . $name . '_' . get_role() . '.php';
    if (file_exists($path)) {
        if (is_array($data)) {
            foreach ($data as $key => $a) {
                $$key = $a;
            }
        }
        require $path;
    } else {
        echo "Không tìm thấy {$path}";
    }
}
//validate sign up and login
function validator($email, $password, $name = 1, $rpw = 1) {
    $flag = true;
    $invalidEmail = validateEmail($email);
    $invalidPassword = validatePassword($password);
    $invalidFullname = validateFullname($name);
    $invalidRpw = validateRpw($rpw);
//    var_dump($invalidPassword, $invalidEmail);die();
    //
    $_SESSION['notification'] = [];
    $msg = [];
    $msg['type'] = 'danger';
    $msg['email'] ='';
    $msg['password'] = '';
    $msg['rpw'] = '';
    $msg['name'] = '';
    $msg['noMatchPw'] = '';
    if($invalidEmail) {
        $msg['email'] = 'Để trống email hoặc nhập sai định dạng email!';
        $flag = false;
    }
    if($invalidPassword) {
        $msg['password'] = 'Để trống password!';
        $flag = false;
    }
    if($name === '' || $invalidFullname) {
        $msg['name'] = 'Để trống trường tên!';
        $flag = false;
    }
    if($rpw === '' || $invalidRpw) {
        $msg['rpw'] = 'Để trống nhập lại mật khẩu!';
        $flag = false;
    }
    if($rpw != $password && $rpw !=1 ) {
        $msg['noMatchPw'] = 'Mật khẩu không khớp';
        $flag = false;
    }
//    var_dump($flag);
//    die();
    $_SESSION['notification'][] = $msg;
//    echo '<pre>';
//    var_dump($msg);die();
//    var_dump($flag);
//    die();
    return $flag;
}
function validateEmail($email) {
    $validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);// Email hợp lệ -> true
    if (empty($email) || !$validEmail) {
        return true;//Email khong hop le
    }
    return false;
}
//
function validatorForm($data = array()) {
    $valid = true;
    if (is_array($data)) {
        foreach ($data as $key => $a) {
            $$key = $a;
            if(empty($$key)) {
                $_SESSION['notification'] = [];
                $msg[$key] = 'Không được để trống';
                $msg['type'] = 'danger';
                $_SESSION['notification'][] = $msg;
                $valid = false;
            }
        }
    }
    return $valid;
}//end func

function validateFullname($name) {
    if(empty($name)) {
        return true;//Full name khong hop le
    }
    return false;
}
function validateRpw($rpw) {
    if(empty($rpw)) {
        return true;//Full name khong hop le
    }
    return false;
}

function validatePassword($password) {
    if(empty($password)) {
        return true;//Pass word khong hop le
    }
    return false;
}
//
function push_notification_user() {
    $_SESSION['notification'] = [];
    $msg['type'] ='danger';
    $msg['email'] ='';
    $msg['password'] = '';
    $msg['user']= 'Tài khoản không tồn tại';
    $_SESSION['notification'][] = $msg;
}
function push_notification($type, $msgs) {
    if (!isset($_SESSION["notification"])) $_SESSION["notification"] = [];
    $data = [];
    $data["type"] = $type;
    $data["msgs"] = $msgs;
    $_SESSION["notification"][] = $data;
}
//Push cảnh báo đăng nhập admin
function get_notification() {

    if (!isset($_SESSION["notification"])) $_SESSION["notification"] = [];
    $notification = $_SESSION["notification"];
    unset($_SESSION["notification"]);
    return $notification;
}

function push_auth($user) {
    $_SESSION["auth"] = $user;
}
//create flag
function is_auth()
{
    return isset($_SESSION["auth"]);
}

function get_auth()
{
    return $_SESSION["auth"];
}
function is_admin()
{
    return is_auth() && get_auth()['role_id'] == 2;
}
function request_auth($isLogin = true)
{
    $request_role = get_role() === 'admin' ? 2 : 1;
    //Neu chua dang nhap
//    if(!is_auth()) {
//        header("Location: ?role=" . get_role().'&mod=auth');
//        die();
//    }
    if (is_auth() !== $isLogin) {
        $auth = get_auth();
        header("Location: " . ($isLogin ? '?role='. ($auth['role_id'] == 1 ? 'client' : 'admin') . '&mod=auth' : '?role=' . ($auth['role_id   '] == 1 ? 'client' : 'admin')));
        die;
    }
    if (is_auth()) {
        $auth = get_auth();
        if ($auth['role_id'] != $request_role) {
            header("Location: ?role=" . ($auth['role_id'] == 1 ? 'client' : 'admin'));
            die;
        }
    }
}
//Add to cart
function push_to_session($product)
{
    array_push($_SESSION['cart'], $product);
}
function check_has_product_in_session($id) {
    foreach ($_SESSION['cart'] as $product) {
        if($id == $product['id']){
            return true;
        }
    }
    return false;
}
function check_has_session_cart() {
    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
        $_SESSION['final_total_money'] = 0;
    }
};
function final_total_money(){
    if(!isset($_SESSION['cart'])) {
        return false;
    }
    $_SESSION['final_total_money'] = 0;
        foreach ($_SESSION['cart'] as $product) {
            $_SESSION['final_total_money'] += $product['amount'] * $product['promo_price'];
        }
}
?>