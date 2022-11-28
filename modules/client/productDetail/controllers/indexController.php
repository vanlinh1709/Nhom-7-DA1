<?php
function construct() {
    load_model('index');
}
function indexAction() {
    $id = $_GET['id'];
//    var_dump($id);
    $product = getProduct($id);
//    echo '<pre>';
//    var_dump($product);
//    die();
    load_view('index', compact('product'));
}
