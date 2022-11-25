<?php
function construct() {
    
}
function indexAction() {
    if (isset($_SESSION['auth'])) {
        unset($_SESSION["auth"]);
//        echo 1;
//        die();
        header('Location: ?role=client');
    }
}