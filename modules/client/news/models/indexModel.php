<?php

    function get_list_news() {
        $sql = 'SELECT * FROM news JOIN products ON news.product_id = products.id ORDER BY news.created_at DESC LIMIT 6';
        return pdo_query($sql);
    }
    function get_detailNews($id) {
        $sql = 'SELECT * FROM news JOIN products ON news.product_id = products.id WHERE news.id = ?';
        return pdo_query_one($sql, $id);
    }
    function get_comments_of_product($id) {
        $sql = 'SELECT * FROM comment WHERE id_sp = ?';
        return pdo_query($sql, $id);
    }
    function get_list_related_news($poster) {
        $sql = 'SELECT * FROM news JOIN products ON news.product_id = products.id WHERE news.poster = ? ORDER BY news.created_at DESC LIMIT 6';
        return pdo_query($sql, $poster);
    }
?>
