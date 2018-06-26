<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/header.php");



// Here is my testprogram
// A variabel, declared but has no value. 
$var;

// A variable containing the value 0
$sum = 0;

// Add integers to variables.
$number1 = 42;
$number2 = 1337;

// Create variable holding a float value.
$number3 = 3.141592654;
$number4 = 1.4142;

// Variables with strings, the string is surrounded by '' or "".
$text1 = "I know ten decimals on pi: ";
$text2 = "Square of 2 is: ";
$text3 = "What is the response to the question on everythin and universe?";
$text4 = "The value 1337 is also known as Leet, or elite.";

// Boolean values (true/false) can be stored in variables.
$value1 = true;
$value2 = false;

// The value null is special and means "nothing", its useful to clear a value
// from a variable, to "reset" it.
$nothingness = null;

// Write out the ultimate question and its response, according to the book:
// The Hitchhiker's Guide to the Galaxy
//echo $text3, " ", $number1, "\n";

// Write out the square root of 2 and round it to three decimals.
$number = 2;
$square = sqrt($number);
$square = round($square, 3);
echo "The square root of ", $number, " is ", $square, "\n";



include(__DIR__ . "/footer.php");
