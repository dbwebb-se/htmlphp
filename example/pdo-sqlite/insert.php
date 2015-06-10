<!doctype html>
<meta charset=utf8>
<link href="style.css" rel="stylesheet">

<form method="post" action="insert-process.php">
    <fieldset>
        <legend>Add boat</legend>
        <p><label>jettyPosition<br><input type="number" name="jettyPosition"></label></p>
        <p><label>boatType<br><input type="text" name="boatType"></label></p>
        <p><label>boatEngine<br><input type="text" name="boatEngine"></label></p>
        <p><label>boatLength<br><input type="number" name="boatLength"></label></p>
        <p><label>boatWidth<br><input type="number" name="boatWidth"></label></p>
        <p><label>ownerName<br><input type="text" name="ownerName"></label></p>
        <p><input type="submit" name="add" value="Add"></p>
    </fieldset>
</form>


<?php
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



// Check whats in the database
$sql = "SELECT * FROM Jetty";
$stmt = $db->prepare($sql);

echo "<p>Execute the SQL-statement:<br><code>$sql</code><p>";
$stmt->execute();



// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<p>The result contains " . count($res) . " rows.</p>";



// Loop through the array and gather the data into table rows
$rows = null;
foreach ($res as $row) {
    $rows .= "<tr>";
    $rows .= "<td>" . htmlentities($row['jettyPosition']) . "</td>";
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
    <th>jettyPostion</th>
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
