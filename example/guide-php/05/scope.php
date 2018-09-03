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
echo "Hello my test page.\n\n";

// Here is the global scope, its not within a function
$sum = 7;

function sumValues($val1, $val2, $val3)
{
    // This is the functions scope
    $sum = $val1 + $val2 + $val3;
    return $sum;
}

echo $sum . "\n";         // 7
echo sumValues(40, 2, 0); // 42
echo $sum . "\n";         // 7


// Include the page footer through the view template file
include(__DIR__ . "/view/footer.php");
