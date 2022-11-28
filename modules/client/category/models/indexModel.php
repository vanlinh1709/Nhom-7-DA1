<?php
function get_list_product_of_category($id) {
    $sql = 'SELECT * from products WHERE category_id = ?';
    return pdo_query($sql, $id);
}
function get_list_product_of_brand($id) {
    $sql = 'SELECT * from products as p JOIN brand as b ON p.brand_id = b.id   WHERE p.brand_id = ?';
    return pdo_query($sql, $id);
}