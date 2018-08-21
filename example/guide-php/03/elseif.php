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

$number = rand(1, 100);

var_dump($number > 50);
if ($number >= 70) {
    echo "The number appears to be greater than, or equal to, 70.\n";
} elseif ($number > 50) {
    echo "The number appears to be greater than 50.\n";
}

// if ($number >= 70) {
//     echo "The number appears to be greater than, or equal to, 70.\n";
// }

if ($number % 2 === 0) {
    echo "The number is an even number.\n";
}

if ($number % 2 !== 0) {
    echo "The number is an odd number.\n";
}

echo "The number is: $number\n";



// Include the page footer through the view template file
include(__DIR__ . "/view/footer.php");
