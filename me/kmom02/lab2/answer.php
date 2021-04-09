<?php

/**
 * @preserve 18e881ac7345a2e1eaad8ab578f845ed
 *
 * 18e881ac7345a2e1eaad8ab578f845ed
 * htmlphp
 * lab2
 * v2
 * makb20
 * 2020-09-13 13:57:35
 * v4.0.0 (2019-03-05)
 *
 * Generated 2020-09-13 15:57:35 by dbwebb lab-utility v4.0.0 (2019-03-05).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 2 - htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP manual](http://php.net/manual/en/langref.php).
 *
 * Here you will find everything this lab will go through and much more.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Strings and basic string operations
 *
 * The foundation for strings.
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Create a variable called `wordOne` and assign the word `"wind"` to it.
 *
 * Create another variable called `wordTwo` and assign the word `"kitten"` to
 * it.
 *
 * Concatenate the two strings, and separate them by a hyphen `-`, into a new
 * variable called `result`.
 *
 * Answer with the result-variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$wordOne = "wind";
$wordTwo = "kitten";

$correctOne = $wordOne."-".$wordTwo;


$ANSWER = $correctOne;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a variable, `floatNumber`, and assign the value 89.14. Concatenate
 * your variable `wordOne` with your variable `floatNumber`, separate the
 * words with a `=`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$floatNumber = 89.14;
$correctTwo = $wordOne."=".$floatNumber;




$ANSWER = $correctTwo;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Create a variable, `intNumber`, and assign the value 286. Concatenate your
 * variable `intNumber` with your variable `wordTwo`, separate the words with
 * a space. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$intNumber = 286;
$correctThree = $intNumber." ".$wordTwo;




$ANSWER = $correctThree;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Create the string: `"There are 286 kitten's doing some wind."` by combining
 * pure text with the values of your variables `wordOne`, `wordTwo` and
 * `intNumber`. Store the resulting text in a variable `sentence`. Answer with
 * the variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */




$sentence = "There are ".$intNumber." ".$wordTwo."'s doing some ".$wordOne.".";

$ANSWER = $sentence;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Use `strlen()` to find the length of the variable `sentence`. Answer with
 * the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$correctFour = strlen($sentence);




$ANSWER = $correctFour;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * Use `substr()` to find the character at index 1 in the word `"pound"`.
 * Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$string = "pound";
$correctFive = substr($string, 1, 1);




$ANSWER = $correctFive;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, false);

/**
 * Exercise 1.7 (1 points)
 *
 * Use `substr()` to find the two characters at index 3 and 4 in the word
 * `"camel"`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$string = "camel";
$correctSix = substr($string, 3, 4);




$ANSWER = $correctSix;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.7", $ANSWER, false);

/**
 * Exercise 1.8 (1 points)
 *
 * Use `strpos()` to find the first matching index of the character `l` in the
 * word `"dolphin"`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$word = "dolphin";
$correctSeven = strpos($word, "l");




$ANSWER = $correctSeven;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.8", $ANSWER, false);

/**
 * Exercise 1.9 (1 points)
 *
 * Use `strpos()` to find the first matching, (if any), index of the
 * characters `xyz` in the word `"dolphin"`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$correctEight = strpos($word, "xyz");




$ANSWER = $correctEight;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.9", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Conditions, booleans, if, else and else if
 *
 * 
 *
 */



/**
 * Exercise 2.1 (1 points)
 *
 * Store the boolean result of the test: `389 is less than 259` in a variable.
 * Answer with the variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

if (389 < 259) {
    $correct = true;
} else {
    $correct = false;
}




$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);

/**
 * Exercise 2.2 (1 points)
 *
 * Answer with the boolean value of: `147 is larger than 148`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

if (147 > 148) {
    $correct = true;
} else {
    $correct = false;
}




$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.2", $ANSWER, false);

/**
 * Exercise 2.3 (1 points)
 *
 * Sum up the numbers: 10, 10, 7, 2 and 10. Save the result in a variable
 * called `totalSum`.
 *
 * Create an if/elseif-statement to see if `totalSum` is higher, lower or
 * equal to 22.
 *
 * Answer with the corresponding result as a string: `"higher"`, `"lower"`,
 * `"equal"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$totalSum = 10 + 10 + 7 + 2 + 10;

if ($totalSum > 22) {
    $correct = "higher";
} elseif ($totalSum < 22) {
    $correct = "hower";
} else {
    $correct = "equal";
}




$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.3", $ANSWER, false);

/**
 * Exercise 2.4 (1 points)
 *
 * Create an if-statement that checks if a value is between (or equal to) 25
 * and  38. Use the variable `totalSum` from last exercise to test the
 * if-statement. Answer with a boolean `true` if the value is between the
 * values, otherwise respond with `false`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

if ($totalSum >= 25 && $totalSum <= 38) {
    $correct = true;
} else {
    $correct = false;
}




$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.4", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 3 . Iteration and loops
 *
 * For-loops and while-loops.
 *
 */



/**
 * Exercise 3.1 (1 points)
 *
 * Create a while-loop that adds 6 to the number 29, 76 times. Use variables
 * to store the numbers. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$number = 29;
$i = 1;

while ($i <= 76) {
    $number = $number + 6;
    $i++;
}



$ANSWER = $number;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.1", $ANSWER, false);

/**
 * Exercise 3.2 (1 points)
 *
 * Create a while-loop that subtracts 5.64 from the number 629 until the
 * number is between (not equal to) 40 and 50. Answer with the final result as
 * a float, rounded to 2 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$number = 629.00;

while ($number >= 50 && $number > 40) {
    $number = $number - 5.64;
}


$ANSWER = round($number, 2);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.2", $ANSWER, false);

/**
 * Exercise 3.3 (1 points)
 *
 * Create a for-loop that iterates from 0 to (including) 17. Add the integer
 * value for each iteration to a string and separate each item with a `,`
 * (comma). Answer with the final string without an ending `,`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$correct = "";
for ($i = 0; $i <= 17; $i++) {
    if ($i < 17) {
        $correct = $correct.$i.",";  
    } else {
        $correct = $correct.$i;
    }
}




$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 4 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 4.1 (3 points)
 *
 * Create a for-loop that goes through (and including) the numbers 40 to 50.
 * If the current number is even, you should multiply it with PI and add it to
 * a variable `res`. If the current number is odd, you should subtract the
 * square root of it, from the variable `res`. If the current number ends with
 * a zero, then ignore it. Answer with the final result of `res` and round it
 * to the nearest higher integer value.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$res = 0;
for ($i = 40; $i <= 50; $i++) {
    if ($i % 10 === 0) {
        continue;
    } elseif ($i % 2 === 0) {
        $res = $res + ($i * pi());
    } else {
        $res = $res - sqrt($i);
    }
}

$res = round($res, 0);
$correct = intval($res);



$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.1", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
