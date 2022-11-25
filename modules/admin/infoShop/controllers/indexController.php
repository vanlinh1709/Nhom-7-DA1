<?php
function construct() {

}
function indexAction() {
    $sql = 'SELECT * FROM info_shop';
    $info = pdo_query_one($sql);
    load_view('index', compact('info'));
}
function updateAction() {
    $sql = 'SELECT * FROM info_shop';
    $info = pdo_query_one($sql);
    load_view('update', compact('info'));
}
function updatePostAction() {
    $data = $_POST;
    $email = $data['email'];
    $phone = $data['phone'];
    $address = $data['address'];
    $id = $data['id'];
    $sql =  'UPDATE info_shop SET email = ?, phone = ?, address = ? WHERE id = ?';
    pdo_execute($sql, $email, $phone, $address, $id);
    header('Location: ?role=admin&mod=infoShop');
}