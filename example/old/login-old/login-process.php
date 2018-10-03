<?php
// Include common details
include(__DIR__ . "/config.php");



// Check if form is submitted and try to login user
$submitted = getPostValueFor('login', false);

if ($submitted !== false) {
    $user     = getPostValueFor('user', null);
    $password = getPostValueFor('password', null);
    $success  = loginUser($user, $password);

    if ($success === true) {
        header("Location: login.php?page=status");
        exit;
    }
}



// Failed to login, redirect to login-page again.
header("Location: login.php?page=login");
