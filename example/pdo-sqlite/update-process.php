<?php
// Check if form posted and get incoming
if (isset($_POST['save'])) {
    // Store posted form in parameter array
    $jettyPosition  = $_POST['jettyPosition'];
    $boatType       = $_POST['boatType'];
    $boatEngine     = $_POST['boatEngine'];
    $boatLength     = $_POST['boatLength'];
    $boatWidth      = $_POST['boatWidth'];
    $ownerName      = $_POST['ownerName'];
    
    $params = [$boatType, $boatEngine, $boatLength, $boatWidth, $ownerName, $jettyPosition];



    // Create a DSN for the database using its filename
    $fileName = __DIR__ . "/db/jetty1.sqlite";
    $dsn = "sqlite:$fileName";



    // Open the database file and catch the exception it it fails.
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>$dsn<br>";
        throw $e;
    }



    // Prepare SQL statement to UPDATE a row in the table
    $sql = <<<EOD
UPDATE Jetty 
    SET
        boatType = ?,
        boatEngine = ?,
        boatLength = ?,
        boatWidth = ?,
        ownerName = ?
    WHERE
        jettyPosition = ?
EOD;
    $stmt = $db->prepare($sql);



    // Execute the SQL to INSERT within a try-catch to catch any errors.
    try {
        $stmt->execute($params);
    } catch (PDOException $e) {
        echo "<p>Failed to update the row, dumping details for debug.</p>";
        echo "<p>Incoming \$_POST:<pre>" . print_r($_POST, true) . "</pre>";
        echo "<p>The error code: " . $stmt->errorCode();
        echo "<p>The error message:<pre>" . print_r($stmt->errorInfo(), true) . "</pre>";
        throw $e;
    }

    // Print out the successful results
    echo "<p>Updated the row:<br></p><pre>" . print_r($params, true) . "</pre>";
    echo "<p><a href='update.php'>Update another row</a>.</p>";
    exit();
}
