<?php
    function construct() {
        request_auth(true);
        load_model('index');
    }
    function indexAction() {
        $id = $_GET['id'];
        $list_orders = get_list_orders_of_user($id);
        $list_status = get_list_order_status();
        if(is_auth() && !is_admin()) {
            $user = get_id_by_email($_SESSION['auth']['email']);
            $infoUser = getInfoUser($_SESSION['auth']['email']);
        }
//        var_dump($infoUser);
        load_view('index', compact('list_orders', 'list_status', 'infoUser'));
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
?>
