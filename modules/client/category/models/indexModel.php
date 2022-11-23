<?php
function get_list_product_of_category($id) {
    $sql = 'SELECT * from products WHERE category_id = ?';
    return pdo_query($sql, $id);
}