<?php
// Include common settings
require __DIR__ . "/config.php";

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


?><!doctype html>
<meta charset=utf8>
<link href="style.css" rel="stylesheet">


<?php
// Check if script was accessed using specific position
// as in update?position=2
$position = isset($_GET['position'])
    ? $_GET['position']
    : null;

$boatType = null;
$boatEngine = null;
$boatLength = null;
$boatWidth = null;
$ownerName = null;

if ($position) {
    // Get details on the boat using specified position
    $sql = "SELECT * FROM jetty WHERE position = ?";
    $stmt = $db->prepare($sql);
    $params = [$position];
    $stmt->execute($params);

    // Get the results as an array with column names as array keys
    $res = $stmt->fetchAll(PDO::FETCH_BOTH);
    
    if (empty($res)) {
        die("No such position.");
    }
    
    // Move content of array to individual variables, for ease of use.
    list($position, $boatType, $boatEngine, $boatLength, $boatWidth, $ownerName) = $res[0];
}

?>

<form method="post" action="update-process.php">
    <fieldset>
        <legend>Update boat</legend>
        <p><label>position<br><input type="number" name="position" value="<?=$position?>" readonly></label></p>
        <p><label>boatType<br><input type="text" name="boatType" value="<?=$boatType?>"></label></p>
        <p><label>boatEngine<br><input type="text" name="boatEngine" value="<?=$boatEngine?>"></label></p>
        <p><label>boatLength<br><input type="number" name="boatLength" value="<?=$boatLength?>"></label></p>
        <p><label>boatWidth<br><input type="number" name="boatWidth" value="<?=$boatWidth?>"></label></p>
        <p><label>ownerName<br><input type="text" name="ownerName" value="<?=$ownerName?>"></label></p>
        <p><input type="submit" name="save" value="Save"></p>
    </fieldset>
</form>


<?php
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
