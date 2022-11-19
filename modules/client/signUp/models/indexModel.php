<?php
function createNewUser($name, $email, $password) {
    $sql = 'INSERT INTO users(fullname, email, password) VALUES(?, ?, ?)';
    pdo_execute($sql, $name, $email, $password);
}