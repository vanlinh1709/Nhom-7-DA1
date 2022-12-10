<?php
function construct() {
    request_auth();
    load_model('index');
}
function indexAction() {
    $info = getInfo();
    load_view('index', compact('info'));
}
function updateAction() {
    $info = getInfo();
    load_view('update', compact('info'));
}
function updatePostAction() {
    $data = $_POST;
    $email = $data['email'];
    $phone = $data['phone'];
    $address = $data['address'];
    $link_face = $data['link_face'];
    $link_twitter = $data['link_twitter'];
    $link_insta = $data['link_insta'];
    $id = $data['id'];
    //
    $sql = 'UPDATE info_shop SET email = ?, phone = ?, address = ?, link_face = ?, 
                     link_twitter = ?, link_insta = ? WHERE id = ?';
    pdo_execute($sql, $email, $phone, $address, $link_face, $link_twitter, $link_insta, $id);
    //
    header('Location: ?role=admin&mod=infoShop');
}