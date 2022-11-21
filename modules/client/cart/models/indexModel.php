<?php
function get_product_by_id($id) {
    $sql = 'SELECT * FROM products WHERE id = ? ';
    return pdo_query_one($sql, $id);
}