<?php
function get_list_slide() {
    $sql = 'SELECT * FROM slideshow';
    return pdo_query($sql);
}
function get_list_slide_and_product_name() {
    $sql = 'SELECT * FROM slideshow as s JOIN products as p ON s.product_id = p.id';
    return pdo_query($sql);
}
function get_list_products_name() {
    $sql = 'SELECT products.title, products.id FROM products';
    return pdo_query($sql);
}
function get_product_id_of_slideshow_by_id($id) {
    $sql = 'SELECT slideshow.product_id FROM slideshow WHERE id = ?';
    return pdo_query_one($sql, $id);
}
function get_slideshow_image_by_id($id) {
    $sql = 'SELECT slideshow.slideshow_img FROM slideshow WHERE id = ?';
    return pdo_query_one($sql, $id);
}
function create_slide_show($slideshow_image, $product_id) {
    $sql = 'INSERT INTO slideshow(slideshow_img, product_id) VALUES(?, ?)';
    pdo_execute($sql, $slideshow_image, $product_id);
}
function update_slide_show($id, $slideshow_image, $product_id) {
    $sql = 'UPDATE slideshow SET slideshow_img = ?, product_id = ? WHERE id = ?';
    pdo_execute($sql, $slideshow_image, $product_id, $id);
}
//
function delete_slideshow($id) {
    $sql = 'DELETE FROM slideshow WHERE id = ?';
    pdo_execute($sql, $id);
}
