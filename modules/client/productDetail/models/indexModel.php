<?php
function getProduct($id) {
    $sql = 'SELECT * FROM products WHERE id = ?';
    $result = pdo_query_one($sql, $id);
    return $result;
}