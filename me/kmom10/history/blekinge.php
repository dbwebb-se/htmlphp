<?php
// Connect to database.
$db = connectToDb($_SESSION["dsn"]);

// Prepare SQL statement
$sql = "SELECT * FROM article WHERE id LIKE 18";
$stmt = $db->prepare($sql);


// Execute DQL statement.
$stmt->execute();

// Get result and print it.
$res = $stmt->fetchAll();
print_r($res);
