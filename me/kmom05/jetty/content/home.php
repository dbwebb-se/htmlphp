<?php

if (is_null($_SESSION["dbChk"])) {
    echo '<p>Please connect to make anything happen.</p>';
} else {

    // Create a DSN for the database using its filename.
    $filename = __DIR__ . "/../db/boatclub.sqlite";
    $dsn = "sqlite:$filename";

    $connectedDB = connectToDatabase($dsn);

    // Prepare and execute the SQL statement.
    $stmt = $connectedDB->prepare("SELECT * FROM jetty");
    $stmt->execute();

    // Get the results as an array with column names as array keys
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>", print_r($res, true), "</pre>";
}

?>

</div>
