<?php
function construct() {
    load_model('index');
}
function indexAction() {
    $id = $_GET['id'];
//    var_dump($id);
    $product = getProduct($id);
    $product_cate_id = $product['category_id'];
    $list_related_products = getRelatedProducts($product_cate_id);
//    var_dump($list_related_products);
//    die();
    load_view('index');
}
