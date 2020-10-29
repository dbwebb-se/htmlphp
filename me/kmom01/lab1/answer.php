<?php

/**
 * @preserve 84d81b02e204755d29dfd0c6608e394a
 *
 * 84d81b02e204755d29dfd0c6608e394a
 * htmlphp
 * lab1
 * v2
 * makb20
 * 2020-08-24 18:58:15
 * v4.0.0 (2019-03-05)
 *
 * Generated 2020-08-30 22:37:56 by dbwebb lab-utility v4.0.0 (2019-03-05).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 1 - htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP manual](http://php.net/manual/en/langref.php).
 *
 * Here you will find everything this lab will go through and much more.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Integers, floats and basic arithmetics
 *
 * The foundation of numbers and basic arithmetic.
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Create two variables called `numOne` and `numTwo` and assign to them the
 * values 23 and 2.
 *
 * Sum up the variables and answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numOne = 23;
$numTwo = 2;




$ANSWER = $numOne + $numTwo;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Use your two variables `numOne` and `numTwo`. Subtract `numOne` from
 * `numTwo` and answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$correctTwo  = $numTwo - $numOne;




$ANSWER = $correctTwo;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Divide `numOne` with `numTwo` and use the function `round()` to round the
 * answer to 1 decimal.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$correctThree = round($numOne /  $numTwo, 1);



$ANSWER = $correctThree;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Create a variable called `floatOne` and give it the value 299.1. Create
 * another variable called `floatTwo` and give it the value 24.77. Sum up the
 * variables and answer with the result rounded to 2 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$floatOne = 299.1;
$floatTwo = 24.77;
$correctFour = round($floatOne + $floatTwo, 2);




$ANSWER = $correctFour;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Subtract `floatOne` from `floatTwo`, round up to 3 decimals and answer with
 * the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$correctFive = round($floatTwo - $floatOne, 3);




$ANSWER = $correctFive;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * Create a variable called `floatThree` and give it the value 97.25.  Add
 * `floatOne` to `floatTwo` and multiply the result with `floatThree`, take
 * that result and divide it by `numOne`.
 *
 * Answer with the result rounded to 4 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$floatThree = 97.25;
$resultOne = ($floatOne + $floatTwo) * $floatThree;
$resultTwo = round($resultOne / $numOne, 4);




$ANSWER = $resultTwo;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, false);

/**
 * Exercise 1.7 (1 points)
 *
 * Create a variable `modOne` with a value of 739 and a variable `modTwo`
 * holding the value 59.
 *
 * Answer with the result of `modOne` modulo (%) `modTwo`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$modOne = 739;
$modTwo = 59;
$correctSix = $modOne % $modTwo;




$ANSWER = $correctSix;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.7", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 2.1 (3 points)
 *
 * You are going to solve the well-known 'chessboard and rice grain problem'.
 *
 * Imagine you have a standard chessboard and put one rice grain on the first
 * square. Then you put two grains on the second square, four on the third,
 * eight on the fourth and so on... How many rice grains are there on the last
 * square?
 *
 * Answer with the square root of the result, rounded to 2 decimals. (Make
 * sure the answer is of the type `double`).
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$calculateGrains = pow(2, 63);
$addGrain = $calculateGrains + 1;
$roundGrains = round($addGrain, 2);
$answerGrains = sqrt($roundGrains);
$rootTotalGrains = $answerGrains;

$ANSWER = round($rootTotalGrains, 2);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);

/**
 * Exercise 2.2 (3 points)
 *
 * Sum all numbers from 1 to 100. Answer with the result. (Make sure the
 * answer is of the type `integer`)
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$number = 0;

for ($i=1; $i<=100; $i++) {
    $number = $number + $i;
}

$ANSWER = $number;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.2", $ANSWER, true);


// Wrap it up
exit($dbwebb->exitWithSummary());
