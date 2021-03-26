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


// Prints article data.
function printArticle($article, $id)
{
    // Connect to database.
    $db = connectToDb($_SESSION["dsn"]);

    // Prepare SQL statement
    $sql = "SELECT data FROM $article WHERE id LIKE $id";
    $stmt = $db->prepare($sql);


    // Execute DQL statement.
    $stmt->execute();

    // Get result and print it.
    $res = $stmt->fetchColumn();
    print_r($res);
}
