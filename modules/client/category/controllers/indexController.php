<?php
function construct() {
    load_model('index');
}
function indexAction() {
    $brand_name = '';
    $category_name = '';
    if(isset($_GET['brand_id'])) {
        $brand_id = $_GET['brand_id'];
        $list_product = get_list_product_of_brand($brand_id);
        if(!$list_product) echo 'Danh mục không tồn tại';
        $cate_id = '';
        $brand_name= get_brand_name_by_id($brand_id);
    } else {
        $cate_id = $_GET['id'];
        $list_product = get_list_product_of_category($cate_id);
        $brand_id = '';
        $category_name= get_name_by_id($cate_id);
    }
    load_view('index', compact('list_product', 'cate_id', 'brand_id','category_name', 'brand_name'));
}
function findProductsPostAction() {
    $keyword = $_POST['keyword'];
    $list_product = get_list_searched_product($keyword);
//    var_dump($list_product);
    load_view('index', compact('list_product'));

}
