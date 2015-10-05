<!doctype html>
<meta charset0"utf-8"/>
<style>
html {
    background-color: #222;
    color: #0f0;
}
body {
    margin-left: 40px;
    margin-top: 20px;
    width: 1000px;
    font-size: 28px;
}
table {
    border: 1px solid green;
    width: 100%;
}
th {
    background-color: white;
}
</style>

<pre>

<?php 
echo "Hello World\n\n";


// Create a DSN for the database using its filename
$fileName = __DIR__ . "/ladok.sqlite";
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
$stmt = $db->prepare("SELECT * FROM Kurs");
$stmt->execute();
 
// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>", print_r($res, true), "</pre>";

echo "Namnet på andra kursen är: " . $res[1]['namnKurs']; //print_r($res[1], true);


// Loop through the array and gather the data into table rows
$rows = null;
foreach ($res as $row) {
    $rows .= "<tr>";
    $rows .= "<td>{$row['kodKurs']}</td>";
    $rows .= "<td>{$row['namnKurs']}</td>";
    $rows .= "<td>{$row['poangKurs']}</td>";
    $rows .= "<td>{$row['ansvarig']}</td>";
    $rows .= "</tr>\n";
}
 
// Print out the result as a HTML table using PHP heredoc
echo <<<EOD
<table>
<tr>
    <th>Kurskod</th>
    <th>Namn</th>
    <th>Poang</th>
    <th>Ansvarig</th>
</tr>
$rows
</table>
EOD;
