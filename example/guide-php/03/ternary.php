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
echo "Hello my test page.\n";

$b = 7;

// $a = null;
// if ($b) {
//     $a = $b + 1;
// }

$a = $b ? $b + 1 : null;

echo "The values are: a='$a', b='$b'.\n";



// Include the page footer through the view template file
include(__DIR__ . "/view/footer.php");
