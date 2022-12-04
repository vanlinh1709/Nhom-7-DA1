<?php

function construct() {
    load_model('index');
}

function indexAction() {
//    var_dump($_SESSION['auth']);
//    die();
    $categories = get_list_categories();
   
    $list_newest_product = get_list_product_newest();
    // echo '<pre>';
    // var_dump($list_newest_product);
    // die();
    $list_bestseller_product = get_list_product_bestSeller();
    // echo '<pre>';
    // var_dump($list_bestseller_product);
    // die();
    $list_featured_product = get_list_product_featured();
    // echo '<pre>';
    // var_dump($list_featured_product);
    // die();
    // $list_slide_show = get_list_slide_and_product_name();
    $list_salest_products = get_list_salest_products();
    // echo '<pre>';
    // var_dump($list_featured_product);
    // die();
    // load_view('index', compact('categories', 'list_newest_product',
    //     'list_bestseller_product', 'list_featured_product', 'list_slide_show', 'list_salest_products'
    //    ));
    load_view('index', compact('categories', 'list_newest_product','list_bestseller_product','list_featured_product','list_salest_products'));
}