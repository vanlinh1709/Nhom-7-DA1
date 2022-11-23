<?php

function get_auth_user($username, $pass) {
    $result = pdo_query_one("SELECT * FROM `users` WHERE `email` = '$username' AND `password` = '$pass'");
    return $result;
}