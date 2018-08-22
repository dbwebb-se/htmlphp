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
echo "Hello my test page.";

// Create some arrays
$collection1 = [];
$collection2 = ["A string", 42, 3.14, true, false, null, []];
var_dump($collection1);
var_dump($collection2);

// Add items to array
$collection1[] = "❤";
$collection1[] = "♠";
$collection1[] = "♣";
$collection1[] = "♦";
var_dump($collection1);

// Get items from an array
echo $collection1[0];
echo $collection1[1];
echo $collection1[2];
echo $collection1[3];
echo "\n";

// Get item that does not exists
//echo $collection1[9];

// Check if a item exists before accessing it.
$value = "default value";
if (array_key_exists(9, $collection1)) {
    $value = $collection[9];
}
var_dump($value);

// Check if a item exists before accessing it.
$value = $collection[9] ?? "default value";
var_dump($value);

// Get items from an array
echo "0: $collection1[0]\n";
echo "1: $collection1[1]\n";
echo "2: $collection1[2]\n";
echo "3: $collection1[3]\n";
echo "\n";

unset($collection1[1]);

echo "0: " . ($collection1[0] ?? null) . "\n";
echo "1: " . ($collection1[1] ?? null) . "\n";
echo "2: " . ($collection1[2] ?? null) . "\n";
echo "3: " . ($collection1[3] ?? null) . "\n";
echo "\n";

// Count
echo "Collection 1: " . count($collection1) . "\n";
echo "Collection 2: " . count($collection2) . "\n";

$collection2 = ["A string", 42, 3.14, true, false, null];
var_dump($collection1);
var_dump($collection2);


// Include the page footer through the view template file
include(__DIR__ . "/view/footer.php");
