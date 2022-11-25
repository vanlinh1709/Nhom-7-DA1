<?php

function construct() {
    load_model('index');
}

function indexAction() {
    $categories = get_list_categories();
    $list_newest_product = get_list_product_newest();
    $list_bestseller_product = get_list_product_bestSeller();
    $list_featured_product = get_list_product_featured();
    $list_slide_show = get_list_slide_and_product_name();
    $list_salest_products = get_list_salest_products();
//    $info = get_info_shop();
//   var_dump($categories);
//   var_dump($list_newest_product[0]['thumbnail']);
//   die();

    load_view('index', compact('categories', 'list_newest_product',
        'list_bestseller_product', 'list_featured_product', 'list_slide_show', 'list_salest_products'
       ));
}