<?php
function get_product_by_id($id) {
    $sql = 'SELECT products.id, products.title, products.thumbnail, products.promo_price, products.number FROM products WHERE id = ? ';
    return pdo_query_one($sql, $id);
}