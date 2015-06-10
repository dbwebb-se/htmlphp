<!doctype html>
<meta charset=utf8>
<link href="style.css" rel="stylesheet">

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



// Prepare the SQL statement to drop the table
echo "<p>Prepare to drop the table, if it exists.<p>";
$sql = <<<EOD
DROP TABLE IF EXISTS "Jetty";
EOD;
$stmt = $db->prepare($sql);
$stmt->execute();



// Prepare the SQL statement to create the table
echo "<p>Prepare to create the table.<p>";
$sql = <<<EOD
CREATE TABLE "main"."Jetty" (
    "jettyPosition" INTEGER PRIMARY KEY  NOT NULL  UNIQUE, 
    "boatType" VARCHAR(20) NOT NULL, 
    "boatEngine" VARCHAR(20) NOT NULL, 
    "boatLength" INTEGER, 
    "boatWidth" INTEGER, 
    "ownerName" VARCHAR(20)
)
EOD;
$stmt = $db->prepare($sql);
$stmt->execute();



// Prepare SQL statement to INSERT new rows into table
echo "<p>Prepare to insert into the table.<p>";
$sql = <<<EOD
INSERT INTO "Jetty" VALUES(?, ?, ?, ?, ?, ?);
EOD;
$stmt = $db->prepare($sql);



// Insert each row
echo "<p>Inserting rows into the table.</p>";
$params = [1,'Buster XXL','Yamaha 115hk',635,240,'Adam'];
$stmt->execute($params);

$params = [2,'Buster M','Yamaha 40hk',460,186,'Berit'];
$stmt->execute($params);

$params = [3,'Linder 440','Tohatsu 4hk',431,164,'Ceasar'];
$stmt->execute($params);



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
