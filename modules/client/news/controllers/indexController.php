<?php
    function construct() {
        load_model('index');
    }
    function indexAction() {
        $list_news = get_list_news();
//        var_dump($list_news);
//        die();
        load_view('index', compact('list_news'));
    }
    function newdetailAction() {
        $id = $_GET['id'];
        $detailNew = get_detailNews($id);
        //get comments of product
        $listComments = get_comments_of_product($detailNew['product_id']);
//        var_dump($listComments);
//        die();
        //get list releated comments
        $list_related_comments = get_list_related_news($detailNew['poster']);
//        var_dump($list_related_comments);
//        die();
        load_view('newDetail', compact('detailNew', 'listComments', 'list_related_comments'));
    }
?>