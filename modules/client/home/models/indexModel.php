<?php

function get_list_categories() {
    $result = pdo_query("SELECT * FROM `categories`");
    return $result;
}
function get_list_product_newest() {
    $result = pdo_query("SELECT * FROM `products` ORDER BY id DESC LIMIT 6");
    return $result;

}
function get_list_product_bestSeller() {
    $result = pdo_query("SELECT * FROM `products` ORDER BY sales DESC LIMIT 6");
    return $result;

}
function get_list_product_featured() {
    $result = pdo_query("SELECT * FROM `products` ORDER BY views DESC LIMIT 6 ");
    return $result;

}