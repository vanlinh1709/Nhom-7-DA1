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