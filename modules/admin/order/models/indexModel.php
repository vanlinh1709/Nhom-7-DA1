<?php
function get_list_orders() {
    $sql = 'SELECT * FROM orders';
    return pdo_query($sql);
}
function get_list_order_status() {
    $sql = 'SELECT * FROM order_status';
    return pdo_query($sql);
}
function get_status_of_order_by_id($id) {
    $sql = 'SELECT orders.id_status FROM orders WHERE id = ? ';
    return pdo_query_one($sql, $id);
}
function update_status_order($new_id_status, $id) {
    $sql = 'UPDATE orders SET id_status = ? WHERE id = ?';
    pdo_query($sql, $new_id_status, $id);
}