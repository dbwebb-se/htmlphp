<?php

/**
 * @preserve d67da3abdc2ba6eafff341aaf4a5bdb9
 *
 * d67da3abdc2ba6eafff341aaf4a5bdb9
 * htmlphp
 * lab3
 * v2
 * makb20
 * 2020-09-18 07:43:29
 * v4.0.0 (2019-03-05)
 *
 * Generated 2020-09-18 09:43:29 by dbwebb lab-utility v4.0.0 (2019-03-05).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 3 - Htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP Manual](http://php.net/manual/en/langref.php).
 *
 * There you will find everything this lab will go through and much more.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Arrays - with numeric index
 *
 * 
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Create an array, called `countries` with the items: `[Russia, France,
 * Norway]`.
 *
 * Answer with the second item in the array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$countries = ["Russia", "France", "Norway"];



$ANSWER = $countries[1];

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a new array called `capitals` with the items: `[Moscow, Paris,
 * Oslo]`.
 *
 * Answer with a string containing each country from the `countries`-array
 * followed by the corresponding capital. Use the format `"country = capital,
 * country = capital..."`
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$capitals = ["Moscow", "Paris", "Oslo"];




$ANSWER = $countries[0] . " = " . $capitals[0] . ", "  . $countries[1] . " = " . $capitals[1] . ", " . $countries[2] . " = " . $capitals[2];

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Create an array, called `numbers1` with the items: `[285, 11, 9.75, 9,
 * 2216]`. Answer with the sum of the first two items.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers1 = [285, 11, 9.75, 9, 2216];




$ANSWER = $numbers1[0] + $numbers1[1];

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Use your arrays `numbers1` and `capitals` to change item at index 2 in
 * `numbers1` to the item at index 0 in `capitals`. Answer with the array
 * `numbers1`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$numbers1[2] = $capitals[0];



$ANSWER = $numbers1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Use your array `countries` and concatenate the first and the last item as a
 * string. Separate the items with a hyphen `-` and answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */






$ANSWER = $countries[0] . "-" . end($countries);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Arrays - with keys
 *
 * 
 *
 */



/**
 * Exercise 2.1 (1 points)
 *
 * Use your `countries` and `capitals` arrays and create another array called
 * `keyArray`. The country should be the key and the capital should be the
 * value. Answer with the new array. (hint: `"country" => "capital"`)
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$keyArray = array(
    $countries[0] => $capitals[0],
    $countries[1] => $capitals[1],
    $countries[2] => $capitals[2]
);


$ANSWER = $keyArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);

/**
 * Exercise 2.2 (1 points)
 *
 * Add the key `"Canada"` with the value `"Ottawa"` to your `keyArray`. Answer
 * with the updated array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$canada = array(
    "Canada" =>  "Ottawa"
);
$keyArray = array_merge($keyArray, $canada);




$ANSWER = $keyArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.2", $ANSWER, false);

/**
 * Exercise 2.3 (1 points)
 *
 * Answer with the value for the key `"France"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$ANSWER = $keyArray["France"];

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 3 . Arrays - built-in functions
 *
 * 
 *
 */



/**
 * Exercise 3.1 (1 points)
 *
 * Find the number of items in the array `[285, 11, 9.75, 9, 2216]`. Answer
 * with the result as an integer.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$numbers = [285, 11, 9.75, 9, 2216];




$ANSWER = count($numbers);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.1", $ANSWER, false);

/**
 * Exercise 3.2 (1 points)
 *
 * Sort the array `[285, 11, 9.75, 9, 2216]` in decending order. Make sure
 * that it does maintain the key association. Answer with the sorted array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

arsort($numbers);





$ANSWER = ($numbers);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.2", $ANSWER, false);

/**
 * Exercise 3.3 (1 points)
 *
 * Use `pop()` on the array `[285, 11, 9.75, 9, 2216]` and answer with the
 * popped item.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$numbers = [285, 11, 9.75, 9, 2216];





$ANSWER = array_pop($numbers);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.3", $ANSWER, false);

/**
 * Exercise 3.4 (1 points)
 *
 * Use `push()` on the array `[123, 25, 87.55, 2, 5466]` and insert the number
 * 56. Answer with the resulting array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers =  [123, 25, 87.55, 2, 5466];
array_push($numbers, 56);




$ANSWER = $numbers;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.4", $ANSWER, false);

/**
 * Exercise 3.5 (1 points)
 *
 * Copy your array `countries` to a new array called `newArray`. Use `shift()`
 * on the new array and answer with the shifted item.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$newArray = $countries;





$ANSWER = array_shift($newArray);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.5", $ANSWER, false);

/**
 * Exercise 3.6 (1 points)
 *
 * Use `unshift()` on your `newArray` add the items `"North Dakota"` and
 * `"Montana"` in the beginning of the array. Answer with the modified array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
array_unshift($newArray, "North Dakota", "Montana");





$ANSWER = $newArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.6", $ANSWER, false);

/**
 * Exercise 3.7 (1 points)
 *
 * Reverse the order of the array `[285, 11, 9.75, 9, 2216]`. Answer with the
 * modified array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers = [285, 11, 9.75, 9, 2216];





$ANSWER = array_reverse($numbers);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.7", $ANSWER, false);

/**
 * Exercise 3.8 (1 points)
 *
 * Use `implode()` on your `capital`-array and answer with a string where each
 * item is separated by a hyphen `-`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$correct = implode("-", $capitals);




$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.8", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 4 . Arrays - for-each loop
 *
 * 
 *
 */



/**
 * Exercise 4.1 (1 points)
 *
 * Create an array, called `numbers1` with the items: `[11, 4, 41, 67, 99, 22,
 * 8, 83, 5, 16]`. Use a for-each loop to sum each item with 14 and put them
 * in a new array called `summedNumbers1`. Answer with the new array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$numbers2  = [];
$numbers1 = [11, 4, 41, 67, 99, 22, 8, 83, 5, 16];
foreach ($numbers1 as $value) {
    array_push($numbers2, $value + 14);
}



$ANSWER = $numbers2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.1", $ANSWER, false);

/**
 * Exercise 4.2 (1 points)
 *
 * Create a new array called `numbers2` with the items `[10, 3, 45, 98, 4, 7,
 * 56, 23, 3, 1]`. Use at least a for-each loop to add all numbers larger than
 * 20 to a new array called `largeNumbers`. Answer with the new array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$largeNumbers = [];
$numbers2 = [10, 3, 45, 98, 4, 7, 56, 23, 3, 1];
foreach ($numbers2 as $value) {
    if ($value > 20) {
        array_push($largeNumbers, $value);
    }
}




$ANSWER = $largeNumbers;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.2", $ANSWER, false);

/**
 * Exercise 4.3 (1 points)
 *
 * Create an array with the keys: `"one"`, `"two"`, `"three"`, `"four"` and
 * `"five"` and the values: 1, 2, 3, 4, 5. Use a foreach-loop to add all keys
 * and values to an array in the format: `["key"=value, "key"=value, etc]`.
 * Use `implode()` to make the answer a string with all items separated by a
 * comma `,`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$keyArray = array(
    "one" => 1,
     "two" => 2,
     "three" => 3,
     "four" => 4,
     "five" => 5
);

$correct = [];

foreach ($keyArray as $key => $value) {
        array_push($correct, ("$key"."=".$value));
}
 




$ANSWER = implode(",", $correct);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 5 . Switch-case
 *
 * [PHP Manual about
 * switch](http://se1.php.net/manual/en/control-structures.switch.php)
 *
 */



/**
 * Exercise 5.1 (1 points)
 *
 * Create a switch-case statement to decide which continent a certain country
 * resides in. Use the countries: `"Sweden, Brazil, China, Australia, Canada"`
 * and the continents:
 *     `"Europe, South America, Asia, Oceania, North America"`.
 *
 * Answer with a test on the country: `"Canada"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$country = "Canada";

switch ($country) {
    case "Sweden":
        $correct = "Europe";
        break;
    case "Brazil":
        $correct = "South America";
        break;
    case "China":
        $correct = "Asia";
        break;
    case "Australia":
        $correct = "Oceania";
        break;
    case "Canada":
        $correct = "North America";
        break;
    default:
        $correct = "You didn't specify one of the countries in this assignment.";
}

$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("5.1", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 6 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 6.1 (3 points)
 *
 * A switch-case statement can handle multiple cases with the same result.
 * Create a new switch-case statement that decides which is the corresponding
 * continent. Use the countries: `"Sweden, Denmark, Finland, Brazil, China,
 * Australia, Canada"` and the continents: `"Europe, South America, Asia,
 * Oceania, North America"`.
 *
 * Answer with a test on the country: `"Finland"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$country = "Finland";

switch ($country) {
    case "Sweden":
    case "Denmark":
    case "Finland":
        $correct = "Europe";
        break;
    case "Brazil":
        $correct = "South America";
        break;
    case "China":
        $correct = "Asia";
        break;
    case "Australia":
        $correct = "Oceania";
        break;
    case "Canada":
        $correct = "North America";
        break;
    default:
        $correct = "You didn't specify one of the countries in this assignment.";
}

$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("6.1", $ANSWER, false);

/**
 * Exercise 6.2 (3 points)
 *
 * Sort the array `[123, 25, 87.55, 2, 5466]` in ascending order. Make sure
 * that it does not maintain the key association. Answer with the sorted
 * array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers = [123, 25, 87.55, 2, 5466];
asort($numbers);
$numbers1 = [];
foreach ($numbers as $value) {
    array_push($numbers1, $value);
}




$ANSWER = $numbers1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("6.2", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
