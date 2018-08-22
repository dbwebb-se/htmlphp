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

// Add a collection of staff members
$staff = [];

// Add details for one person
$mos = ["name" => "Mikael", "acronym" => "mos", "salary" => 7];
// var_dump($mos);

// Add details for another person
$lew = [
    "name" => "Kenneth",
    "acronym" => "lew",
    "salary" => 8
];
// var_dump($lew);

// Read values from the array
$name = $mos["name"];
$acronym = $mos["acronym"];
$salary = $mos["salary"];
// echo "The person $name ($acronym) earns $salary money.";

// Add items to array
$collection["hearts"] = "❤";
$collection["spade"] = "♠";
$collection["clubs"] = "♣";
$collection["diamond"] = "♦";
// var_dump($collection);

// Array of arrays
$staff["mos"] = $mos;
$staff["lew"] = $lew;
var_dump($staff);

// Access values in array of arrays
echo "Mos has a salary of " . $staff["mos"]["salary"] . " moneys.\n";


// Include the page footer through the view template file
include(__DIR__ . "/view/footer.php");
