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
function get_order_by_id($id)
{
    $sql = 'SELECT * FROM orders WHERE orders.id = ?';
    return pdo_query_one($sql, $id);
}
function get_orders_detail_by_id($id)
{
    $sql = 'SELECT * FROM order_detail WHERE order_detail.order_id = ?';
    return pdo_query($sql, $id);
}

function get_info_product_of_order_detail($id_order_detail)
{
    $sql = 'SELECT p.id, p.title, p.thumbnail, p.promo_price, p.price FROM products as p JOIN order_detail as o ON p.id = o.product_id  WHERE o.id= ? ';
    return pdo_query($sql, $id_order_detail);
}
function get_list_orders_of_user($id) {
    $sql = 'SELECT * FROM orders WHERE id_user = ?';
    return pdo_query($sql, $id);
}
function getInfoUser($email) {
    $sql = "SELECT * FROM users WHERE email = ?";
    return pdo_query_one($sql, $email);
}
function updateUser($id, $name, $email, $phone_number, $address, $password) {
    $sql = 'UPDATE users SET fullname = ?, email= ?, phone_number= ?, address= ?, password= ? WHERE id = ?';
    pdo_execute($sql,$name, $email, $phone_number, $address, $password, $id);
}