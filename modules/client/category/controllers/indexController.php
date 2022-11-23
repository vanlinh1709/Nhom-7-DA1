<?php
function construct() {
    load_model('index');
}

function indexAction() {
    $cate_id = $_GET['id'];
    $list_product = get_list_product_of_category($cate_id);
//    echo '<pre>';
//    var_dump());
//    die();
    load_view('index', compact('list_product', 'cate_id'));
}