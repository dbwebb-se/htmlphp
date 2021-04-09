<?php

/**
 * @preserve 8bc75a290f173ac0503f5e6c48cb0667
 *
 * 8bc75a290f173ac0503f5e6c48cb0667
 * htmlphp
 * lab4
 * v2
 * makb20
 * 2020-10-30 10:34:37
 * v4.0.0 (2019-03-05)
 *
 * Generated 2020-10-30 11:34:37 by dbwebb lab-utility v4.0.0 (2019-03-05).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 4 - Htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP Manual](http://php.net/manual/en/langref.php).
 *
 * There you will find everything this lab will go through and much more.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Basic functions
 *
 * 
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Create a function called `sumNumbers()` that should take 2 numbers as
 * arguments and return the sum of them.
 *
 * Answer with a call to the function using the numbers 318 and 485.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$number1 = 318;
$number2 = 485;

function sumNumbers($number1, $number2)
{
    $correct = $number1 + $number2;
    return $correct;
};

$correct = sumNumbers($number1, $number2);





$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a function called `sumArray()` that should take an array as argument
 * and return the sum of all items in the array.
 *
 * Answer with a call to the function using the array: `[5,946,2,86,9]`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$myArray = [5, 946, 2, 86, 9];

function sumArray($myArray)
{
    $correct = array_sum($myArray);
    return $correct;
};

$correct = sumArray($myArray);

$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Create a function called `modArray()` that should take 2 arguments, an
 * array and a string. Replace the first item in the array with the string and
 * return the array.
 *
 * Answer with a call to the function using the arguments: `[4,256,5,13,1]`
 * and `"leek"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$myArray = [4, 256, 5, 13, 1];
$myString = "leek";

function modArray($myArray, $myString)
{
    $myArray[0] = $myString;
    $correct = $myArray;
    return $correct;
};

$correct = modArray($myArray, $myString);

$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Create a function called `printRange()` that should take 2 numbers as
 * arguments, start and stop. The function should add all even numbers between
 * start and stop (not including) to an array and return it.
 *
 * Answer with a call to the function using the arguments: 20 and 44.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$number1 = 20;
$number2 = 44;

function printRange($start, $stop)
{
    $myArray = [];
    while ($start < ($stop -1)) {
        $start = $start + 1;
        if ($start % 2 === 0) {
            array_push($myArray, $start);
        }
    };
    return $myArray;
}

$correct = printRange($number1, $number2);

$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Create a function called `combineArrays()` that takes two arrays as
 * arguments. The function should combine the arrays to one associative array
 * and return it. The first argument is the key and the second argument is the
 * value.
 *
 * Answer with a call to the function using the arguments:
 * `["green","brown","pink","white","gray","blue"]` and
 * `["frog","bear","pig","lion","wolf","whale"]`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$myColours = ["green","brown","pink","white","gray","blue"];
$myAnimals = ["frog","bear","pig","lion","wolf","whale"];

function combineArrays($myColours, $myAnimals)
{
    $correct = array_combine($myColours, $myAnimals);
    return $correct;
};

$correct = combineArrays($myColours, $myAnimals);

$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * Create a function called `euroToDollar()` that takes one argument, the euro
 * amount to convert to dollars. Count 1 Euro as 1.261215 dollars. Return the
 * dollar amount of 541 Euros.
 *
 * Answer with the result as a double with 4 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$euro = 541;

function euroToDollar($euro)
{
    $exchangeRate = 1.261215;
    $dollar = round($euro * $exchangeRate, 4);
    return $dollar;
};

$correct = euroToDollar($euro);


$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, false);

/**
 * Exercise 1.7 (1 points)
 *
 * Create a function called `inRange()` that takes one argument. The function
 * should return `true` if the argument is higher than 50 and lower than 100.
 * If the number is out of range, the function should return `false`. The
 * return type should be boolean.
 *
 * Use the argument 85 and answer with a call to the function.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$testArgument = 85;

function inRange($arg)
{
    if ($arg > 50 and $arg < 100) {
        return true;
    };
    return false;
};

$correct = inRange($testArgument);

$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.7", $ANSWER, false);

/**
 * Exercise 1.8 (1 points)
 *
 * Create a function called `calculateArea()` that takes one argument, the
 * diameter of a circle. The function should return the area of the circle,
 * with 4 decimals.
 *
 * Answer with the result if the diameter is 20. ( hint: `pi()` )
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$circleDiameter = 20;

function calculateArea($circleDiameter)
{
    $radius = $circleDiameter / 2;
    $area = round(($radius * $radius) * pi(), 4);
    return $area;
};

$correct = calculateArea($circleDiameter);


$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.8", $ANSWER, false);

/**
 * Exercise 1.9 (1 points)
 *
 * Create a function called `fibonacci()`. The function should use the
 * [Fibbonacci Sequence](http://en.wikipedia.org/wiki/Fibonacci_number),
 * starting with `1, 1, 2`. Return the sum of all odd numbers in the sequence,
 * when the sequence value dont exceed 1.000.000.
 *
 * Answer with a call of the function. A Fibonacci-sequence can look like
 * this: 1, 1, 2, 3, 5, 8, 13, 21, 34, 55 etc. You add the current value with
 * the last, i.e. `1+2=3, 3+2=5, 5+3=8 etc`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

function fibonacci()
{
    $myArray = [];
    $numberBefore = 0;
    $currentNumber = 1;
    $nextNumber = 0;
    while ($currentNumber <= 1000000) {
        if ($currentNumber % 2 === 1) {
            array_push($myArray, $currentNumber);
        };
        $nextNumber = $numberBefore + $currentNumber;
        $numberBefore = $currentNumber;
        $currentNumber = $nextNumber;
    };
    $correct = array_sum($myArray);
    return $correct;
};

$correct = fibonacci();


$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.9", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 2.1 (3 points)
 *
 * In this exercises you should use the former functions `sumArray()` and
 * `calculateArea()`. Create a new function called `calculateMany()` that
 * takes an array with numbers as argument. For every number in the array,
 * call `calculateArea()` and store the result in a new array. The last
 * position in your new array should hold the result of a call to the function
 * `calculateArea()` where you pass the sum of the whole array, you passed as
 * argument. All numbers in the resulting array should be rounded up to
 * nearest integer. Loop through the array and convert all values to nearest
 * higher integer value.
 *
 * Tip: `intval()`.
 * Note: If your result seems correct but still fails, make sure your values
 * are of the type Integer and not Float.
 *
 * Answer with a call to `calculateMany()` with the array `7, 47, 19, 46, 14`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$testArray = [7, 47, 19, 46, 14];

function calculateMany($numberArray)
{
    $returnArray = [];
    foreach ($numberArray as $value) {
        $area = calculateArea($value);
        array_push($returnArray, $area);
    };
    $lastItem = array_sum($numberArray);
    $area = calculateArea($lastItem);
    array_push($returnArray, $area);

    $counter = 0;
    foreach ($returnArray as $value) {
        $roundValue = ceil($value);
        $returnArray[$counter] = intval($roundValue);
        $counter = $counter + 1;
    };
    return $returnArray;
};

$correct = calculateMany($testArray);


$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, true);


// Wrap it up
exit($dbwebb->exitWithSummary());
