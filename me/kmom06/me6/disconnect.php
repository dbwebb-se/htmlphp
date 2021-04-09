<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/src/functions.php");

// Create a DSN for the database using its filename.
$filename = __DIR__ . "/../db/boatclub.sqlite";
$dsn = "sqlite:$filename";
session_destroy();

$url = "jetty.php";
header("Location: $url");
