<?php
// Include common details
include(__DIR__ . "/config.php");



// Check if form is submitted and try to login user
$submitted = getPostValueFor('logout', false);

if ($submitted !== false) {
    logoutUser();
    header("Location: login.php?page=status");
    exit;
}



// Error condition, should not really come here if the form is okey.
header("Location: login.php?page=logout");
