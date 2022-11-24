<?php
function construct() {
    load_model('index');
}
function indexAction() {
    //check user or guest
    $info_user = [
        'id' => '',
        'fullname' => '',
        'email' => '',
        "phone_number" => '',
        'address' => ''
    ];
    if(is_auth()) {
        $info_user = getInfoUser($_SESSION['auth']['email']);
//        var_dump($_SESSION['auth']['email']);
//        var_dump($info_user);
//        die();
    }
    $list_product = $_SESSION['cart'];
    load_view('index', compact('info_user', 'list_product'));
}
function indexPostAction() {
    //Đưa thông tin order vào bảng order
//    var_dump($_POST);
    $id = rand(1,10000);
    $id_user = $_POST['id'] ? $_POST['id'] : null;
    $customer_name = $_POST['name'];
    $customer_phone_number = $_POST['phone'];
    $customer_email = $_POST['email'];
    $customer_address = $_POST['address'];
    $total_price = $_SESSION['final_total_money'];
//    echo '<pre>';
//    var_dump($id, $id_user, $customer_name, $customer_phone_number, $customer_email, $customer_address,
//        $total_price);
//    die();
    createOrder($id, $id_user, $customer_name, $customer_phone_number, $customer_email, $customer_address,
        $total_price);
    //
    $order_id = $id;

    foreach ($_SESSION['cart'] as $product) {
        $product_id = $product['id'];
        $quantity_product = $product['amount'];
        $total_money = $product['total_money'];
        createOrderDetail($order_id, $product_id, $quantity_product, $total_money);
    }
    header('Location: ?role=client&mod=order&action=successOrder');
    //Đưa chi tiết đơn hàng vào order detail
}
function successOrderAction() {
    unset($_SESSION['cart']);
    $_SESSION['cart'] = [];
    load_view('successOrder');
}