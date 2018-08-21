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
// if ($number > 50 && $number < 80 && $number % 2 === 0) {
//     echo "The number appears to be larger than 50, less than 80 and an even number.\n";
// }

if ($number > 50 
    && $number < 80
    && $number % 2 === 0
) {
    echo "The number appears to be larger than 50, less than 80 and an even number.\n";
}

if (($number > 50 && $number < 80 && $number % 2 === 0)
    || ($number < 40 && $number % 2 !== 0)
) {
    echo "The number appears to be larger than 50, less than 80 and an even number...\n";
    echo "OR it could be less than 40 and an odd number...\n";
}

$isBetween50And80 = $number > 50 && $number < 80;
$isEven = $number % 2 === 0;
if ($isBetween50And80 && $isEven) { 
    echo "The number appears to be larger than 50, less than 80 and an even number.\n";
}

// if ($number >= 70) {
//     echo "The number appears to be greater than, or equal to, 70.\n";
// }

// if ($number % 2 === 0) {
//     echo "The number is an even number.\n";
// }
// 
// if ($number % 2 !== 0) {
//     echo "The number is an odd number.\n";
// }

if ($number % 2 === 0) {
    echo "The number is an even number.\n";
} else {
    echo "The number is an odd number.\n";
}

echo "The number is: $number\n";



// Include the page footer through the view template file
include(__DIR__ . "/view/footer.php");
