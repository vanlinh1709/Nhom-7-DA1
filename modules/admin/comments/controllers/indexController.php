<?php
    function construct() {
        request_auth();
        load_model('index');
    }
    function indexAction() {
        $listComments = get_list_comments();
        foreach ($listComments as $index => $comment) {
            $product = get_product_by_id($comment['id_sp']);
            $listComments[$index]['product_name'] = $product['title'];
        }
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
    function respondPostAction() {
        $name_sender = $_SESSION['auth']['fullname'];
        $email_sender = $_SESSION['auth']['email'];
        $id_sp = $_GET['id_sp'];
        $contents = $_POST['contents_respond'];
        $status = 1;
        add_comment($name_sender, $email_sender, $id_sp, $contents, $status);
        header('Location: ?role=admin&mod=comments');
    }
?>
