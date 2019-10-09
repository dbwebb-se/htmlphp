<?php
/**
 * Commonly used functions.
 */

/**
 * Open a connection to a database and return its handler.
 *
 * @param string $dsn the data source name.
 *
 * @throws PDOException when connection fails.
 *
 * @return object as database connection.
 */
function connectToDatabase(string $dsn) : object
{
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>$dsn<br>";
        throw $e;
    }

    return $db;
}
