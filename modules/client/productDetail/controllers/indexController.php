<?php
function construct() {
    load_model('index');
}
function indexAction() {
    $id = $_GET['id'];
//    var_dump($id);
    $product = getProduct($id);
    // var_dump($product);
    // die();
    $product_cate_id = $product['category_id'];
    $list_related_products = getRelatedProducts($product_cate_id);
    $indexOfProduct = 0;
    foreach($list_related_products as $index => $p) {
        if($p['id'] == $id) {
            $indexOfProduct = $index;
        }
    }
    array_splice($list_related_products, $indexOfProduct, 1);
//    var_dump($list_related_products);
//    die();
    $listComments = getCommentsOfProduct($id);
//    var_dump($listComments);
    load_view('index',compact('product','list_related_products', 'listComments'));
}
function sendCommentPostAction() {
    $data = $_POST;
    $name_sender = $_POST['name_sender'];
    $email_sender = $_POST['email_sender'];
    $id_sp = $_GET['id_product'];
    $contents = $_POST['contents'];
    if(isset($_SESSION['auth'])) {
        $name_sender = $_SESSION['auth']['fullname'];
        $email_sender = $_SESSION['auth']['email'];
        $id_sp = $_GET['id_product'];
        $contents = $_POST['contents'];
    }
    addComment($name_sender, $email_sender, $id_sp, $contents);
    header('Location: ?role=client&mod=productDetail&id='.$_GET['id_product']);


}
