<?php
function construct() {
    load_model('index');
}
function indexAction() {
    $categories = get_list_categories();
    $list_newest_product = get_list_product_newest();
    $list_bestseller_product = get_list_product_bestSeller();
//    var_dump($list_bestseller_product);
//    die();
    $list_featured_product = get_list_product_featured();
    $list_slide_show = get_list_slide_and_product_name();
    $list_banner = get_list_banner();
    $list_salest_products = get_list_salest_products();
    $user['id'] = '';
    if(is_auth() && !is_admin()) {
        $user = get_id_by_email($_SESSION['auth']['email']);
    }
    load_view('index', compact('categories', 'list_newest_product',
        'list_bestseller_product', 'list_featured_product', 'list_slide_show', 'list_salest_products',
    'list_banner', 'user'
    ));
}