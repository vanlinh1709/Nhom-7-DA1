<?php
    function construct() {
        request_auth();
        load_model('index');
    }
    function indexAction() {
        $listComments = get_list_comments();
//        var_dump($listComments);
        load_view('index', compact('listComments'));
    }
    function updateStatusAction() {
        $id = $_GET['id_comment'];
        changeStatus($id);
        header('Location: ?role=admin&mod=comments');
    }
    function deleteAction() {
        $id = $_GET['id_comment'];
        delete($id);
        header('Location: ?role=admin&mod=comments');
    }
    function respondAction() {
        $id = $_GET['id_comment'];
        $comment = getComment($id);
        $product = get_product_by_id($comment['id_sp']);
        $comment['product_name'] = $product['title'];
//        var_dump($comment);
//        die();
        load_view('respond', compact('comment'));
    }
?>
