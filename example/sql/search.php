<?php

// Create a DSN for the database using its filename
$fileName = __DIR__ . "/ladok.sqlite";
$dsn = "sqlite:$fileName";

// Open the database file and catch the exception it it fails.
try {
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to the database using DSN:<br>$dsn<br>";
    throw $e;
}

// Get search string if any
$search = isset($argv[1])
    ? $argv[1]
    : null;

// Prepare and execute the SQL statement
if ($search) {
    $stmt = $db->prepare(
        "SELECT * FROM course WHERE kurskod LIKE ? OR namn LIKE ?"
    );
    $stmt->execute([$search, $search]);
} else {
    $stmt = $db->prepare("SELECT * FROM course");
    $stmt->execute();
}

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($res);
