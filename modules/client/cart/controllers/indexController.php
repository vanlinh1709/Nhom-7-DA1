<?php
function construct() {
    load_model('index');
}
function indexAction() {
    check_has_session_cart();
    $list_product_added = $_SESSION['cart'];
//    var_dump($list_product_added);
//    die();
    load_view('index', compact('list_product_added'));
}
function addAction() {
    check_has_session_cart();
    $id = $_GET['id_product'];
    $sentedMod = $_GET['currentMod'];
//    var_dump($id);
    $product = get_product_by_id($id);
    $product['amount'] = 1;
    $product['total_money'] = $product['promo_price'];

//    var_dump($data);
    //check product has been cart?

    $hasProduct = check_has_product_in_session($id);
//    var_dump($hasProduct);
    if($hasProduct) {
//        echo 'da co product';
//        var_dump($_SESSION['cart']);
//        die();
        foreach($_SESSION['cart'] as $index => $product) {
            if($product['id'] == $id) {
                $_SESSION['cart'][$index]['amount']++;
                $_SESSION['cart'][$index]['total_money'] += $_SESSION['cart'][$index]['promo_price'];
            }
        }
        //dieu huong trang web sau khi nguoi dung an them vao gi hang
        if($sentedMod == 'productDetail') {
            header('Location: ?role=client&' . 'mod='.$sentedMod . '&id=' .$id);
        } elseif($sentedMod == 'category' && isset($_GET['cate_id'])) {
            $cate_id = $_GET['cate_id'];
            header('Location: ?role=client&' . 'mod='.$sentedMod . '&id=' .$cate_id);
        }
            elseif($sentedMod == 'category' && isset($_GET['brand_id'])) {
                $id = $_GET['brand_id'];
                header('Location: ?role=client&' . 'mod='.$sentedMod . '&brand_id=' .$id);
            }
        else
        {
            header('Location: ?role=client&' . 'mod='.$sentedMod);

        }
    } else {//chua co product duoc them trong gio hang
        push_to_session($product);//push product len sesion[cart]
//        echo '<pre>';
//        var_dump($_SESSION['cart']);
        if($sentedMod == 'productDetail' ) {
            header('Location: ?role=client&' . 'mod='.$sentedMod . '&id=' .$id);
        } elseif($sentedMod == 'category' && isset($_GET['cate_id'])) {
            $cate_id = $_GET['cate_id'];
            header('Location: ?role=client&' . 'mod='.$sentedMod . '&id=' .$cate_id);
        }
        elseif($sentedMod == 'category' && isset($_GET['brand_id'])) {
            $id = $_GET['brand_id'];
            header('Location: ?role=client&' . 'mod='.$sentedMod . '&brand_id=' .$id);
        }
        else
        {
            header('Location: ?role=client&' . 'mod='.$sentedMod);

        }
    }
    final_total_money();
}
//Dung khi them san pham trong trang chi tiet san pham
function addPostAction() {
    if($_POST['qty']== 0) die();
    check_has_session_cart();
    $id = $_GET['id_product'];
    $sentedMod = $_GET['currentMod'];
//    var_dump($id);
    $product = get_product_by_id($id);
    //
    $product['amount'] = $_POST['qty'];
    //

    $product['total_money'] = $product['promo_price'] * $product['amount'] ;

//    var_dump($data);
    //check product has been cart?

    $hasProduct = check_has_product_in_session($id);
//    var_dump($hasProduct);
    if($hasProduct) {
//        echo 'da co product';
//        var_dump($_SESSION['cart']);
//        die();
        foreach($_SESSION['cart'] as $index => $product) {
            if($product['id'] == $id) {
                $_SESSION['cart'][$index]['amount'] = $_SESSION['cart'][$index]['amount'] + (int)$product['amount'];
                $_SESSION['cart'][$index]['total_money'] += $_SESSION['cart'][$index]['promo_price'] * $product['amount'];
            }
        }
        if($sentedMod == 'productDetail') {
            header('Location: ?role=client&' . 'mod='.$sentedMod . '&id=' .$id);
        } elseif($sentedMod == 'category') {
            $cate_id = $_GET['cate_id'];
//            var_dump($cate_id);
//            die();
            header('Location: ?role=client&' . 'mod='.$sentedMod . '&id=' .$cate_id);
        }
        else
        {
            header('Location: ?role=client&' . 'mod='.$sentedMod);

        }
    } else {
        push_to_session($product);//push product len sesion[cart]
//        echo '<pre>';
//        var_dump($_SESSION['cart']);
        if($sentedMod == 'productDetail' ) {
            header('Location: ?role=client&' . 'mod='.$sentedMod . '&id=' .$id);
        } elseif($sentedMod == 'category') {
            $cate_id = $_GET['cate_id'];
            header('Location: ?role=client&' . 'mod='.$sentedMod . '&id=' .$cate_id);
        }
        else
        {
            header('Location: ?role=client&' . 'mod='.$sentedMod);

        }
    }
    final_total_money();

}

function delAction() {
    $id = $_GET['id_product'];
//    var_dump($id);
    foreach ($_SESSION['cart'] as $index => $product) {
        if($product['id'] == $id) {
            array_splice($_SESSION['cart'], $index, 1);
        }
    }
    final_total_money();
    header('Location: ?role=client&mod=cart');
}
function updateCartPostAction() {
//    var_dump($_POST);
//    die();
    $value_amount = $_POST;
    foreach ($_SESSION['cart'] as $index => $product) {
        $_SESSION['cart'][$index]['amount'] = (int)$value_amount[$product['id']];
        $_SESSION['cart'][$index]['total_money'] = (int)$value_amount[$product['id']] * $product['promo_price'];
//        echo '<pre>';
//        echo $product['amount'];
//        die();
    }
//    echo $product['amount'];
//    var_dump($_SESSION['cart']);
//    die();
    final_total_money();
    header('Location: ?role=client&mod=cart');
}
function delCartAction() {
    unset($_SESSION['cart']);
    header('Location: ?role=client&mod=cart');
}
