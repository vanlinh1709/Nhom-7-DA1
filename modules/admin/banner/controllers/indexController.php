<?php
function construct() {
    request_auth();
    load_model('index');
}
function indexAction() {
    $list_banner = get_list_banner();
    $list_banner_and_product_name = get_list_banner_and_product_name();
    //    echo '<pre>';
    //    var_dump($list_banner_and_product_name);
    //    die();
    load_view('index', compact('list_banner_and_product_name'));
}
function createAction() {
    $products = get_list_products_name();
//    echo '<pre>';
//    var_dump($products);
//    die();
    load_view('create', compact('products'));
}
function createPostAction() {
    $data = $_POST;
    $data_file = $_FILES;
    $banner_image = $data_file['banner_image'];
//    echo '<pre>';
//    var_dump();
//    die();
    if (empty($banner_image['name'])) {
        push_notification('danger', ['Vui lòng nhập ảnh']);
        header('Location: ?role=admin&mod=slideshow&action=create');
        die();
    }
    if($banner_image['name'] != '') {
        move_uploaded_file($banner_image['tmp_name'], 'C:/xampp/htdocs/Nhom_7_DA1/public/uploads/images/banner/' .$banner_image['name']);
    } else {
        $banner_image['name'] = null;
    }
    $product_id = $data['product_id'];
    create_banner($banner_image['name'], $product_id);
    header('Location: ?role=admin&mod=banner');
}
//form update
function updateAction() {
    $id_banner_updated = $_GET['id'];
    $list_products_name_and_id = get_list_products_name();
    $product_id_updated = get_product_id_of_banner_by_id($id_banner_updated);
//    echo '<pre>';
//    var_dump($list_products_name_and_id, $product_id_updated);
//    die();
    load_view('update', compact('list_products_name_and_id', 'product_id_updated'));
}
function updatePostAction() {
    $data = $_POST;
    $data_file = $_FILES['banner_image'];
    $id_banner = $data['id_banner'];
    $product_id = $data['product_id'];
//    var_dump($_FILES['banner_image']['name']);
//    die();
    if($data_file['name'] != '') {
        move_uploaded_file($data_file['tmp_name'], 'C:/xampp/htdocs/Nhom_7_DA1/public/uploads/images/banner/' .$data_file['name']);
        $banner_image = $data_file['name'];
//        var_dump($banner_image);
//        die();
    } else {
        $banner_image = get_banner_image_by_id($id_banner)['banner_img'];
//        var_dump($banner_image);
//        die();
    }

    update_banner( $id_banner, $banner_image, $product_id);
    header('Location: ?role=admin&mod=banner');
}
function deleteAction() {
    $id_banner = $_GET['id'];
    delete_banner($id_banner);
    header('Location: ?role=admin&mod=banner');
}