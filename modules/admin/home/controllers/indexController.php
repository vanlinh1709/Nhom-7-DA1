<?php

function construct() {
    request_auth();
//    echo '1';
//    die();
    load_model('index');
}

function indexAction() {
//    echo '1';
    load_view('index');
}