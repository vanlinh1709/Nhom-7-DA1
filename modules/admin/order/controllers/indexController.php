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