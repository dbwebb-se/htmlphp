<?php

/**
 * @preserve e51afa8e1284c645048bf21ad0478c13
 *
 * e51afa8e1284c645048bf21ad0478c13
 * htmlphp
 * lab6
 * v2
 * makb20
 * 2021-03-18 21:53:30
 * v4.0.0 (2019-03-05)
 *
 * Generated 2021-03-18 22:53:30 by dbwebb lab-utility v4.0.0 (2019-03-05).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 6 - Htmlphp
 *
 * In this lab you will be working with a SQLite database file: `myDB.sqlite`
 * and PDO.
 *
 * Do not forget to check the [PHP Manual on
 * PDO](http://php.net/manual/en/book.pdo.php)
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Working with SQLite and PDO
 *
 * The database has one table called `people`.
 *
 * The table 'people' has six columns:
 *
 * > `id`, `firstName`, `lastName`, `born`, `cityOfBirth`, `countryOfBirth`.
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Find the firstnames of the people born in England. Answer with an array
 * containing their names.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$filename = __DIR__ . "/myDB.sqlite";
$dsn = "sqlite:$filename";
// Open the database file and catch the exception if it fails.
try {
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to the database using DSN:<br>$dsn<br>";
    throw $e;
}

$sql = "SELECT firstName FROM people WHERE countryOfBirth LIKE 'England'";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = [];
$res[] = $stmt->fetchColumn();
$res[1] = $stmt->fetchColumn();

$ANSWER = $res;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Find the first name and last name of the person born 1964.
 * Answer with a string in the format: `"Firstname Lastname"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = "SELECT firstName FROM people WHERE born LIKE 1964";
$stmt = $db->prepare($sql);
$stmt->execute();

$res = $stmt->fetchColumn();

$sql = "SELECT lastName FROM people WHERE born LIKE 1964";
$stmt = $db->prepare($sql);
$stmt->execute();

$res2 = $stmt->fetchColumn();
$correct = $res . " " . $res2;

$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Sum the years the persons with the lastnames `Blanchett` and `Depp` were
 * born. Answer with an integer.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$sql = "SELECT born FROM people WHERE lastName LIKE 'Blanchett'";
$stmt = $db->prepare($sql);
$stmt->execute();

$res = $stmt->fetchColumn();

$sql = "SELECT born FROM people WHERE lastName LIKE 'Depp'";
$stmt = $db->prepare($sql);
$stmt->execute();

$res2 = $stmt->fetchColumn();
$correct = $res + $res2;

$ANSWER = $correct;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Count the number of entries in the table `people`. Answer with an integer.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$sql = "SELECT COUNT(*) FROM people";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchColumn();

$res = (int)$res;

$ANSWER = $res;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Find which country `(countryOfBirth)` the oldest person was born in. Answer
 * with a string.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$sql = "SELECT MIN(born) FROM people";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchColumn();
$res = (int)$res;

$sql = "SELECT countryOfBirth FROM people WHERE born LIKE $res";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchColumn();

$ANSWER = $res;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * What is the average value of the column `born`? Round the value and answer
 * with an integer.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = "SELECT AVG(born) FROM people";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchColumn();
$res = (int)round($res);

$ANSWER = $res;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, false);

/**
 * Exercise 1.7 (1 points)
 *
 * Find the youngest person born in USA. Which city is he/she born in? Answer
 * with a string.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = "SELECT MAX(born) FROM people WHERE countryOfBirth LIKE 'USA'";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchColumn();
$res = (int)$res;

$sql = "SELECT cityOfBirth FROM people WHERE born LIKE $res";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchColumn();

$ANSWER = $res;

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
 * Get the first name and lastname of all persons in the database. Order them
 * by their last name, alphabetically and ascending.
 *
 * Answer with an array of strings, like this:
 *
 * > `["lastName firstName", "lastName firstName"]`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */






$ANSWER = "Replace this text with the variable holding the answer.";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
