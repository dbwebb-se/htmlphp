<?php
if (is_null($_SESSION["dbChk"])) {
    echo '<p>Please connect to make anything happen.</p>';
} else {
    $connectedDB = connectToDatabase($_SESSION["dsnJetty"]);

    // Prepare and execute the SQL statement.
    $stmt = $connectedDB->prepare("SELECT * FROM jetty");
    $stmt->execute();

    // Get the results as an array with column names as array keys
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>", print_r($res, true), "</pre>";
}

?>

</div>
