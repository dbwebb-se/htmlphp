<?php
/**
 * This is a sample page controller.
 */
// Include the configuration file
include(__DIR__ . "/config.php");

// Include essential functions
include(__DIR__ . "/src/functions.php");

// Set common variables, these are exposed to the view template files
$title = "Test page";

// Include the page header through the view template file
include(__DIR__ . "/view/header.php");



// Here is my testprogram which outputs the page main content
//echo "Hello my test page.\n";

// Split (explode) a string into an array
$backpack = "knife, water bottle, sleepsack, tent, food";
$backpackAsArray = explode(", ", $backpack);

var_dump(count($backpackAsArray));
var_dump($backpackAsArray);



// Include the page footer through the view template file
include(__DIR__ . "/view/footer.php");
