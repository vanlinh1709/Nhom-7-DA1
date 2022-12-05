<?php
    function get_list_comments() {
        $sql = 'SELECT * FROM comment';
        return pdo_query($sql);
    }
    function changeStatus($id) {
        $sql = 'UPDATE comment SET status = 1 WHERE id = ?';
        return pdo_execute($sql, $id);
    }
    function delete($id) {
        $sql = ' DELETE FROM comment WHERE id = ?';
        return pdo_execute($sql, $id);
    }
    function getComment($id) {
        $sql = 'SELECT * FROM comment WHERE id = ?';
        return pdo_query_one($sql, $id);
    }
    function get_product_by_id($id) {
        $sql = 'SELECT title, id FROM products WHERE id = ? ';
        return pdo_query_one($sql, $id);
    }
    function add_comment($name_sender, $email_sender, $id_sp, $contents, $status) {
        $sql = 'INSERT INTO comment(name_sender, email_sender, id_sp, contents, status) 
                VALUES (?, ?, ?, ?, ?)';
        return pdo_execute($sql, $name_sender, $email_sender, $id_sp, $contents, $status);
    }
?>