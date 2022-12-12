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
    //
    $notifications = get_notification();
    $list_product = $_SESSION['cart'];
    load_view('index', compact('info_user', 'list_product', 'notifications'));
}
function indexPostAction() {
    //Validate form
    $customer_name = $_POST['name'];
    $customer_phone_number = $_POST['phone'];
    $customer_email = $_POST['email'];
    $customer_address = $_POST['address'];
    $dataValidate = compact('customer_name', 'customer_phone_number', 'customer_email' ,
        'customer_address');
//    var_dump($dataValidate);
//    die();
    if(!validatorForm($dataValidate)) {
        header('Location: ?role=client&mod=order');
        die();
    }
    //Đưa thông tin order vào bảng order
    $id = rand(1,100000000);
    //
    $id_user = $_POST['id'] ? $_POST['id'] : null;

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
function showMyOrderAction() {
    load_view('buyedOrder');
}
function orderNowAction() {
    unset($_SESSION['cart']);
    $_SESSION['cart'] = [];
    $id = $_GET['id'];
    $product = get_product_by_id($id);
    $product['amount'] = 1;
    $product['total_money'] = $product['promo_price'];
//    var_dump($product);
//    die();
    push_to_session($product);
    final_total_money();
    header('Location: ?role=client&mod=order');
}
function canceOrderAction() {
    $id = $_GET['id_order'];
    $id_user = get_id_by_email($_SESSION['auth']['email'])['id'];
//    var_dump($id_user);
//    die();
    cancel_order($id);
    header('Location: ?role=client&mod=account&id='.$id_user);
}