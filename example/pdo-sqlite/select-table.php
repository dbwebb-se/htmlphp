<!doctype html>
<meta charset=utf8>
<link href="style.css" rel="stylesheet">

<?php
// Create a DSN for the database using its filename
$fileName = __DIR__ . "/db/jetty.sqlite";
$dsn = "sqlite:$fileName";

// Open the database file and catch the exception it it fails.
try {
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to the database using DSN:<br>$dsn<br>";
    throw $e;
}

// Prepare and execute the SQL statement
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
    $rows .= "<td>{$row['jettyPosition']}</td>";
    $rows .= "<td>{$row['boatType']}</td>";
    $rows .= "<td>{$row['boatEngine']}</td>";
    $rows .= "<td>{$row['boatLength']}</td>";
    $rows .= "<td>{$row['boatWidth']}</td>";
    $rows .= "<td>{$row['ownerName']}</td>";
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
EOD;
