<?php
// Connect to database.
$db = connectToDb($_SESSION["dsn"]);

// Prepare SQL statement
$sql = "SELECT data FROM article WHERE id LIKE 27";
$stmt = $db->prepare($sql);


// Execute DQL statement.
$stmt->execute();

// Get result and print it.
$res = $stmt->fetchColumn();
