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
function orders_detailAction() {
    $order_id = $_GET['id_order'];
    $order = get_order_by_id($order_id);
    $orders_detail = get_orders_detail_by_id($order_id);
//    var_dump($orders_detail);
//    die();
    $product_of_orders_detail = [];
    foreach($orders_detail as $od) {
        $info_products = get_info_product_of_order_detail($od['id']);
//        echo '<pre>';
//        var_dump($info_products);
        array_push($product_of_orders_detail, $info_products);
    }
//    echo '<pre>';
//    var_dump($product_of_orders_detail);
//    echo '<hr>';
//    var_dump($orders_detail);
//    die();
    load_view('orderDetail', compact('orders_detail', 'product_of_orders_detail', 'order'));
}