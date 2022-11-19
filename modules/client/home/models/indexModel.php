<?php

function get_list_categories() {
    $result = pdo_query("SELECT * FROM `categories`");
    return $result;
}