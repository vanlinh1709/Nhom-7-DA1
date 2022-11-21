<?php
function construct() {
    load_model('index');
}
function indexAction() {
    check_has_session_cart();
    $list_product_added = $_SESSION['cart'];
    load_view('index', compact('list_product_added'));
}
function addAction() {
    check_has_session_cart();
    $id = $_GET['id_product'];
    $sentedMod = $_GET['currentMod'];
//    var_dump($id);
    $product = get_product_by_id($id);
//    var_dump($data);
    //check product has been cart?

    $hasProduct = check_has_product_in_session($id);
//    var_dump($hasProduct);
    if($hasProduct) {
        echo 'da co product';

        header('Location: ?role=client&' . 'mod='.$sentedMod);
    } else {
        push_to_session($product);//push product len sesion[cart]
//        echo '<pre>';
//        var_dump($_SESSION['cart']);

        header('Location: ?role=client&' . 'mod='.$sentedMod);
    }
}

function delAction() {
    unset($_SESSION['cart']);
}