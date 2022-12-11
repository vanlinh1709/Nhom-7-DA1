<?php
function construct() {
    request_auth();
    load_model('index');
}
function indexAction() {
    $list_slide = get_list_slide();
    $list_slide_and_product_name = get_list_slide_and_product_name();
    //    echo '<pre>';
    //    var_dump($list_slide_and_product_name);
    //    die();
    load_view('index', compact('list_slide_and_product_name'));
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
    $slideshow_image = $data_file['slideshow_image'];
    if (empty($slideshow_image['name'])) {
        push_notification('danger', ['Vui lòng nhập ảnh']);
        header('Location: ?role=admin&mod=slideshow&action=create');
        die();
    }
//    echo '<pre>';
//    var_dump();
//    die();
    if($slideshow_image['name'] != '') {
        move_uploaded_file($slideshow_image['tmp_name'], 'C:/xampp/htdocs/Nhom_7_DA1/public/uploads/images/slideshow/' .$slideshow_image['name']);
    } else {
        $slideshow_image['name'] = null;
    }
    $product_id = $data['product_id'];
    create_slide_show($slideshow_image['name'], $product_id);
    header('Location: ?role=admin&mod=slideshow');

}
//form update
function updateAction() {
    $id_slideshow_updated = $_GET['id'];
    $list_products_name_and_id = get_list_products_name();
    $product_id_updated = get_product_id_of_slideshow_by_id($id_slideshow_updated);
//    echo '<pre>';
//    var_dump($list_products_name_and_id, $product_id_updated);
//    die();
    load_view('update', compact('list_products_name_and_id', 'product_id_updated'));
}
function updatePostAction() {
    $data = $_POST;
    $data_file = $_FILES['slideshow_image'];
    $id_slideshow = $data['id_slideshow'];
    $product_id = $data['product_id'];
//    var_dump($_FILES['slideshow_image']['name']);
//    die();
    if($data_file['name'] != '') {
        move_uploaded_file($data_file['tmp_name'], 'C:/xampp/htdocs/Nhom_7_DA1/public/uploads/images/slideshow/' .$data_file['name']);
        $slideshow_image = $data_file['name'];
    } else {
        $slideshow_image = get_slideshow_image_by_id($id_slideshow)['slideshow_img'];
//        var_dump($slideshow_image);
//        die();
    }

    update_slide_show( $id_slideshow, $slideshow_image, $product_id);
    header('Location: ?role=admin&mod=slideShow');
}
function deleteAction() {
    $id_slideshow = $_GET['id'];
    delete_slideshow($id_slideshow);
    header('Location: ?role=admin&mod=slideShow');
}