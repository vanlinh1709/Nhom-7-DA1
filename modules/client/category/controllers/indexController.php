<?php
function construct() {
    load_model('index');
}

function indexAction() {

    if(isset($_GET['brand_id'])) {
        $brand_id = $_GET['brand_id'];
        $list_product = get_list_product_of_brand($brand_id);
        if(!$list_product) echo 'Danh mục không tồn tại'; //Neu list product rong
        $cate_id = '';
    //    var_dump($list_product);
    //    die();
    } else {
        $cate_id = $_GET['id'];
        $list_product = get_list_product_of_category($cate_id);
        $brand_id = '';
        $category_name= get_name_by_id($cate_id);
        // var_dump($category_name);
        // die();
    }

//    echo '<pre>';
//    var_dump($list_product);
//    die();
    load_view('index', compact('list_product', 'cate_id', 'brand_id','category_name'));
}
