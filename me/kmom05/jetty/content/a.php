<?php

// Create a DSN for the database using its filename.
$filename = __DIR__ . "/../db/boatclub.sqlite";
$dsn = "sqlite:$filename";

$db = connectToDatabase($dsn);

// Prepare and execute the SQL statement.
$stmt = $db->prepare("SELECT * FROM jetty");
$stmt->execute();

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

printJettyResultsetToHTMLTable($res);
