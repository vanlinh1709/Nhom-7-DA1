<?php

function get_list_categories() {
    $result = pdo_query("SELECT * FROM `categories`");
    return $result;
}
function get_list_product_newest() {
    $result = pdo_query("SELECT * FROM `products` ORDER BY created_at DESC LIMIT 6");
    return $result;
}
function get_list_product_bestSeller() {
    $result = pdo_query("SELECT p.id,  thumbnail, title, price, promo_price, sum(od.quantity_product) as total FROM `products` as p  
                             INNER JOIN order_detail as od ON p.id = od.product_id GROUP BY p.id ORDER BY sum(od.quantity_product) DESC LIMIT 6");
    return $result;
}
function get_list_product_featured() {
    $result = pdo_query("SELECT * FROM `products` ORDER BY views DESC LIMIT 6 ");
    return $result;
}
function get_list_slide_and_product_name() {
    $sql = 'SELECT * FROM slideshow as s JOIN products as p ON s.product_id = p.id';
    return pdo_query($sql);
}
function get_list_salest_products() {
    $sql = 'SELECT id,  thumbnail, title, price, promo_price, (price - promo_price) / price as percen_promo FROM products ORDER BY percen_promo DESC LIMIT 6';
    return pdo_query($sql);
}
function get_list_banner() {
    $sql = 'SELECT b.banner_img, b.product_id FROM banner as b JOIN products as p ON b.product_id = p.id';
    return pdo_query($sql);
}





























































































































