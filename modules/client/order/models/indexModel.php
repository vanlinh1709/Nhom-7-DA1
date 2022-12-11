<?php
function getInfoUser($email) {
    $sql = "SELECT * FROM users WHERE email = ?";
    return pdo_query_one($sql, $email);
}
function createOrder($id, $id_user, $customer_name, $customer_phone_number, $customer_email, $customer_address,
$total_price) {
    $sql = 'INSERT INTO orders(id, id_user, customer_name, customer_phone_number, customer_email	
    ,customer_address, total_price) VALUES(?, ?, ?, ?, ?, ?, ?)';
    pdo_execute($sql, $id, $id_user, $customer_name, $customer_phone_number, $customer_email, $customer_address,
        $total_price);
}
function createOrderDetail($order_id, $product_id, $quantity_product, $total_money) {
    $sql = 'INSERT INTO order_detail(order_id, product_id, quantity_product, total_money ) 
                                VALUES(?, ?, ?, ?)';
    pdo_execute($sql,$order_id, $product_id, $quantity_product, $total_money );
}
function get_product_by_id($id) {
    $sql = 'SELECT products.id, products.title, products.thumbnail, products.promo_price, products.number FROM products WHERE id = ? ';
    return pdo_query_one($sql, $id);
}
function cancel_order($id) {
    $sql = 'UPDATE orders SET id_status = 0 WHERE id = ?';
    pdo_execute($sql, $id);
}
function get_list_id() {
    $sql = 'SELECT id FROM orders';
    pdo_query($sql);
}