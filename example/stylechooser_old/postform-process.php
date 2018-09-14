<?php
// Start the session
$name = substr(preg_replace('/[^a-z\d]/i', '', __DIR__), -30);
session_name($name);
session_start();



// Check if style is changed and then set it
$style = isset($_POST['style'])
    ? $_POST['style']
    : null;

if ($style !== null) {
    $_SESSION['stylesheet'] = $style;
}



// To debug a processingpage, before it does its redirect
//var_dump($_SESSION);
//die();



// Redirect to the resultpage
header("Location: chooser.php?page=postform");
