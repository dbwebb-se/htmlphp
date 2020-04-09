<?php

/**
 * Lab answer.php customized to pass `dbwebb inspect`for testing
 * pupose with `make test`, `make dbwebb-testrepo` and `dbwebb testrepo`.
 *
 * This script should just pass with an exit code of 0.
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();

//echo $dbwebb->assertEqual("2.2", $ANSWER, false);
//exit($dbwebb->exitWithSummary());
