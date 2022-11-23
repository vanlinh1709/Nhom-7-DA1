<?php
function construct() {
    load_model('index');
}
function indexAction() {
    request_auth(false);
    $notifications = get_notification();
    load_view('index',  [
        "notifications" => $notifications
    ]);
}
function indexPostAction() {
    request_auth(false);
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $pw = $_POST['pw'];
    $rpw = $_POST['rpw'];

    //validate
    $validInput = validator($email, $pw, $fullname, $rpw);
    if(!$validInput) {
        header('Location: ?role=client&mod=signUp');
        exit();
    }
    createNewUser($fullname, $email, $pw);
    header('Location: ?role=client&mod=signUp&action=loadViewSuccessSignUp');
}
function loadViewSuccessSignUpAction() {
    load_view('successSignUp');
}