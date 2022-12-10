<?php
function get_list_banner() {
    $sql = 'SELECT * FROM banner';
    return pdo_query($sql);
}
function get_list_banner_and_product_name() {
    $sql = 'SELECT * FROM banner as b JOIN products as p ON b.product_id = p.id';
    return pdo_query($sql);
}
function get_list_products_name() {
    $sql = 'SELECT products.title, products.id FROM products';
    return pdo_query($sql);
}
function get_product_id_of_banner_by_id($id) {
    $sql = 'SELECT banner.product_id FROM banner WHERE id = ?';
    return pdo_query_one($sql, $id);
}
function get_banner_image_by_id($id) {
    $sql = 'SELECT banner.banner_img FROM banner WHERE id = ?';
    return pdo_query_one($sql, $id);
}
function create_banner($banner_image, $product_id) {
    $sql = 'INSERT INTO banner(banner_img, product_id) VALUES(?, ?)';
    pdo_execute($sql, $banner_image, $product_id);
}
function update_banner($id, $banner_image, $product_id) {
    $sql = 'UPDATE banner SET banner_img = ?, product_id = ? WHERE id = ?';
    pdo_execute($sql, $banner_image, $product_id, $id);
}
//
function delete_banner($id) {
    $sql = 'DELETE FROM banner WHERE id = ?';
    pdo_execute($sql, $id);
}
