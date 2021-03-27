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

    // Execute SQL statement.
    $stmt->execute();

    // Get result and print it.
    $res = $stmt->fetchColumn();
    print_r($res);

    // Prepare SQL statement
    $sql2 = "SELECT author FROM $article WHERE id LIKE $id";
    $stmt2 = $db->prepare($sql2);

    // Execute SQL statement.
    $stmt2->execute();

    // Get result and print it.
    $res2 = $stmt2->fetchColumn();

    // Determines which byline to insert.
    switch ($res2) {
        case "Peter Öjerskog":
            // Prepare SQL statement
            $sql = "SELECT data FROM article WHERE id LIKE 27";
            $stmt = $db->prepare($sql);

            // Execute SQL statement.
            $stmt->execute();

            // Get result and print it.
            $res = $stmt->fetchColumn();
            echo "<hr>";
            print_r($res);
            break;
        case "Marcus Klingborg":
            // Prepare SQL statement
            $sql = "SELECT data FROM article WHERE id LIKE 28";
            $stmt = $db->prepare($sql);

            // Execute SQL statement.
            $stmt->execute();

            // Get result and print it.
            $res = $stmt->fetchColumn();
            echo "<hr>";
            print_r($res);
            break;
    }
}