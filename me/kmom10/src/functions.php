<?php

// Connects to Database.
function connectToDb($dsn)
{
    // Open database and catches exceptions.
    try {
        $dsn = new PDO($dsn);
        $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>$dsn<br>";
        throw $e;
    }
    return $dsn;
}
