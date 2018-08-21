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

// Count from one to ten
echo "The for-loop initiates the start value.\n";

for ($i = 1; $i <= 10; $i++) {
    echo "$i\n";
}

echo "The number now has the value: '$i'.\n";



// Include the page footer through the view template file
include(__DIR__ . "/view/footer.php");
