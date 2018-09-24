<!doctype html>
<meta charset=utf8>
<link href="style.css" rel="stylesheet">


<?php
// Include common settings
require __DIR__ . "/config.php";

// Check if script was accessed using specific position
// as in ?position=2
$position = isset($_GET['position'])
    ? $_GET['position']
    : null;

if ($position) {
    echo <<<EOD
<form method="post" action="delete-process.php">
    <fieldset>
        <legend>Delete boat</legend>
        <p><label>position<br><input type="number" name="position" value="$position" readonly></label></p>
        <p><input type="submit" name="delete" value="Delete"></p>
    </fieldset>
</form>
EOD;
} else {
    echo "<p><strong>Select a boat to delete.</strong></p>";
}



// Create a DSN for the database using its filename
$fileName = __DIR__ . "/db/boatclub.sqlite";
$dsn = "sqlite:$fileName";



// Open the database file and catch the exception it it fails.
try {
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to the database using DSN:<br>$dsn<br>";
    throw $e;
}



// Check whats in the database
$sql = "SELECT * FROM jetty";
$stmt = $db->prepare($sql);

echo "<p>Execute the SQL-statement:<br><code>$sql</code><p>";
$stmt->execute();



// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<p>The result contains " . count($res) . " rows.</p>";



// Loop through the array and gather the data into table rows
$rows = null;
foreach ($res as $row) {
    $position = htmlentities($row['position']);
    $rows .= "<tr>";
    $rows .= "<td><a href='?position=$position'>$position</a></td>";
    $rows .= "<td>" . htmlentities($row['boatType']) . "</td>";
    $rows .= "<td>" . htmlentities($row['boatEngine']) . "</td>";
    $rows .= "<td>" . htmlentities($row['boatLength']) . "</td>";
    $rows .= "<td>" . htmlentities($row['boatWidth']) . "</td>";
    $rows .= "<td>" . htmlentities($row['ownerName']) . "</td>";
    $rows .= "</tr>\n";
}



// Print out the result as a HTML table using PHP heredoc
echo <<<EOD
<table>
<tr>
    <th>postion</th>
    <th>boatType</th>
    <th>boatEngine</th>
    <th>boatLength</th>
    <th>boatWidth</th>
    <th>ownerName</th>
</tr>
$rows
</table>

<p><a href="init.php">Clear and re-init the database</a>.</p>
EOD;
