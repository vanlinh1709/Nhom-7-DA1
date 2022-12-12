<?php
function construct() {
    load_model('index');
}
function indexAction() {
    $id = $_GET['id'];
//    var_dump($id);
    $product = getProduct($id);
    updateViewProduct($id);
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
    $notifications = get_notification();
//    var_dump($notifications);
    load_view('index',compact('product','list_related_products', 'listComments', 'notifications'));
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
    $status = 0;
    if(is_admin()) {
        $status = 1;
    }
    addComment($name_sender, $email_sender, $id_sp, $contents, $status);
    $_SESSION['notification'] = 'Bình luận của bạn đang được xem xét';
    if(is_admin()) {
        $_SESSION['notification'] = '';
    }
//    var_dump($_SESSION['notification']);
//    die();
    header('Location: ?role=client&mod=productDetail&id='.$_GET['id_product']);


}
