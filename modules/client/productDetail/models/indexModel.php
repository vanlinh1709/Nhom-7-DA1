<?php
function getProduct($id) {
    $sql = 'SELECT * FROM products WHERE id = ?';
    $result = pdo_query_one($sql, $id);
    return $result;
}
function getRelatedProducts($cate_id) {
    $sql = 'SELECT * FROM products WHERE category_id = ? LIMIT 6';
    $result = pdo_query($sql, $cate_id);
    return $result;
}
function getCommentsOfProduct($product_id) {
    $sql = 'SELECT * FROM comment WHERE id_sp = ? AND status = 1';
    $result = pdo_query($sql, $product_id);
    return $result;
}
function addComment($name_sender, $email_sender, $id_sp, $contents, $status) {
    $sql = 'INSERT INTO comment(name_sender, email_sender, id_sp, contents, status) 
            VALUES(?, ?, ?, ?, ?)';
    $result = pdo_execute($sql, $name_sender, $email_sender, $id_sp, $contents, $status);
    return $result;
}
function updateViewProduct($id) {
    $sql = 'UPDATE products SET views = views + 1';
    pdo_execute($sql);
}