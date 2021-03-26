<?php
// Connect to database.
$db = connectToDb($_SESSION["dsn"]);

// Prepare SQL statement

$sql = "SELECT data FROM object WHERE id LIKE 13";
$stmt = $db->prepare($sql);


// Execute DQL statement.
$stmt->execute();

// Get result and print it.
$res = $stmt->fetchColumn();
print_r($res);
