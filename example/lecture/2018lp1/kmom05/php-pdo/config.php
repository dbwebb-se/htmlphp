<?php
/**
 * Configuration file with common settings.
 */
error_reporting(-1);              // Report all type of errors
ini_set("display_errors", 1);     // Display all errors



// Create a DSN for the database using its filename
$fileName = __DIR__ . "/db/course.sqlite";
$dsn = "sqlite:$fileName";
