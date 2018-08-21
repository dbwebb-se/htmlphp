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

$color = "red";

// if ($color === "yellow") {
//     echo "The ball is yellow and shines like the sun.\n";
// } elseif ($color === "red") {
//     echo "It is a red ball, like the planet Mars.\n";
// } else {
//     echo "The ball has some unknown color.\n";
// }

switch ($color) {
    case "yellow":
        echo "The ball is yellow and shines like the sun.\n";
        break;
    case "red":
        echo "It is a red ball, like the planet Mars.\n";
        break;
    default:
        echo "The ball has some unknown color.\n";
}



// Include the page footer through the view template file
include(__DIR__ . "/view/footer.php");
