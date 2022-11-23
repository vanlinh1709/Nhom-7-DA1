<?php
function get_list_orders() {
    $sql = 'SELECT * FROM orders';
    return pdo_query($sql);
}