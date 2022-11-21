<?php
function getProduct($id) {
    $sql = 'SELECT * FROM products WHERE id = ?';
    $result = pdo_query($sql, $id);
    return $result;
}