<?php
function getProduct($id) {
    $sql = 'SELECT * FROM products WHERE id = ?';
    $result = pdo_query_one($sql, $id);
    return $result;
}
function getRelatedProducts($cate_id) {
    $sql = 'SELECT * FROM products WHERE category_id = ? LIMIT 6';
    $result = pdo_query_one($sql, $cate_id);
    return $result;
}
