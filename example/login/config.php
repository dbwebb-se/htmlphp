<?php
/**
 * Configuration file with common settings.
 */
error_reporting(-1);              // Report all type of errors
ini_set("display_errors", 1);     // Display all errors



// Start the named session
$name = preg_replace("/[^a-z\d]/i", "", __DIR__);
session_name($name);
session_start();



// Create an array of the valid users
$users = [
    "doe" => [
        "name"=> "John/Jane Doe",
        "password" => password_hash("doe", PASSWORD_DEFAULT)
    ],
    "admin" => [
        "name"=> "All Mighty Administrator",
        "password" => password_hash("admin", PASSWORD_DEFAULT)
    ],
];
