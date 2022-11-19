<?php

function construct() {
    load_model('index');
}

function indexAction() {
    $categories = get_list_categories();
    $list_newest_product = get_list_product_newest();
//   var_dump($categories);
//   var_dump($list_newest_product[0]['thumbnail']);
//   die();
    load_view('index', compact('categories', 'list_newest_product'));
}