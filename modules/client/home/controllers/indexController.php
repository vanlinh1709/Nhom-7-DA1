<?php

function construct() {
    load_model('index');
}

function indexAction() {
    $categories = get_list_categories();
//    var_dump($categories);
    load_view('index', ['categories' => $categories]);
}