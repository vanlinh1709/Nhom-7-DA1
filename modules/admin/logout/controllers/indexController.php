<?php
function construct() {}

function indexAction()
{
    if (isset($_SESSION['auth'])) {
        unset($_SESSION["auth"]);
        header('Location: ?role=admin');
    }
}