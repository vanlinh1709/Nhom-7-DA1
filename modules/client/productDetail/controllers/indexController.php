<?php
function construct() {
    load_model('index');
}
function indexAction() {
    $id = $_GET['id'];
//    var_dump($id);
    $product = getProduct($id);
    // var_dump($product);
    // die();
    $product_cate_id = $product['category_id'];
    $list_related_products = getRelatedProducts($product_cate_id);
    $indexOfProduct = 0;
    foreach($list_related_products as $index => $p) {
        if($p['id'] == $id) {
            $indexOfProduct = $index;
        }
    }
    array_splice($list_related_products, $indexOfProduct, 1);
//    var_dump($list_related_products);
//    die();
    load_view('index',compact('product','list_related_products'));
}
