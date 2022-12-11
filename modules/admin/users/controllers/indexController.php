<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    request_auth();
    load_model('index');
}

function indexAction() {
    $list_users = get_list_users();
//    show_array($list_users);
    $data['list_users'] = $list_users;
    load_view('index', $data);
}
function createAction() {
    load_view('create');
}
function createPostAction() {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phonenumber'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $role_id = $_POST['role_id'];
    $avatar = $_FILES['avatar'];

    if (empty($name) || empty($email) || empty($phone_number) || empty($address) || empty($password) ||
        empty($role_id)) {
        push_notification('danger', ['Vui lòng nhập đầy đủ các trường']);
        header('Location: ?role=admin&mod=users&action=create');
        die();
    }
//    echo __FILE__;
//    var_dump($avatar['name']);
//    die();
    if (isset($avatar)) {
        move_uploaded_file($avatar['tmp_name'], "C:/xampp/htdocs/Nhom_7_DA1/public/uploads/images/user/" . $avatar['name']);
    }
    createUser($name, $email, $phone_number, $address, $password, $role_id, $avatar['name']);
    push_notification('success', ['Tạo mới tài khoản thành công']);
    header('Location: ?role=admin&mod=users');
}
function deleteAction() {
    $id = $_GET['id_user'];
    deleteUser($id);
    push_notification('success', ['Xoá tài khoản thành công']);
    header('Location: ?role=admin&mod=users');
}

function showFormAction($id) {
    return get_user_by_id($id);
}
function updateAction() {
    $id = $_GET['id_user'];
    $user = get_user_by_id($id);
    $data['user'] = $user;
    if ($user) {
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=users');
    }
}
function updatePostAction() {
    $id = $_GET['id_user'];
//    echo $id;
        $user = get_user_by_id($id);
    if (!$user) {
        header('Location: ?role=admin&mod=user');
        die();
    }
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phonenumber'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $role_id = $_POST['role_id'];
    $avatar = $user['avatar'];
//    var_dump($avatar);
//    die();
    //validate
    if (empty($name) || empty($email) || empty($phone_number) || empty($address) || empty($password) ||
        empty($role_id)) {
        push_notification('danger', ['Vui lòng nhập đầy đủ các trường']);
        header('Location: ?role=admin&mod=users&action=update&id_user='.$id);
        die();
    }
    if($_FILES['avatar']['name'] != '') {
        $avatar = $_FILES['avatar']['name'];
        move_uploaded_file($_FILES['avatar']['tmp_name'], "C:/xampp/htdocs/Nhom_7_DA1/public/uploads/images/user/" . $avatar);
    }
    updateUser($id ,$name, $email, $phone_number, $address, $password, $role_id, $avatar);
    push_notification('success', ['Chỉnh sửa tài khoản thành công']);
    header('Location: ?role=admin&mod=users');
}


