<?php
function construct() {
    load_model('index');
}
function indexAction() {
    $list_orders = get_list_orders();
//    var_dump($list_orders);
//    die();
    load_view('index', compact('list_orders'));
}
function updateAction() {
    $id_order = $_GET['id_order'];
    $list_order_status = get_list_order_status();
    $status_of_order = get_status_of_order_by_id($id_order)['id_status'];
//    var_dump($status_of_order);
//    die();
    load_view('update', compact('list_order_status', 'status_of_order'));
}
function updatePostAction() {
    $id_order = $_GET['id_order'];
    $new_id_status = $_POST['order_status'];
    update_status_order($new_id_status, $id_order);
    header('Location: ?role=admin&mod=order');
}