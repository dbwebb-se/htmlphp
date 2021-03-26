<?php
// Get incoming from search form
$dinoPos = isset($_GET['dinoPos'])
    ? $_GET['dinoPos']
    : null;

?>
<p>Enter the position of the entry you wish to edit.</p>
<form>
    <fieldset>
        <input type="hidden" name="page" value="update">
        <input type="search" name="dinoPos" placeholder="Enter the  position." value="<?=htmlentities($dinoPos)?>">
        <input type="submit" value="Search">
    </fieldset>
</form>

<?php
// Break script if empty $search
if (is_null($dinoPos)) {
    exit("<p>Nothing to display, please enter a searchstring.");
}

$connectedDB = connectToDatabase($_SESSION["dsnDinosaur"]);

// Prepare the SQL statement
$sql = "SELECT * FROM dinosaurs WHERE position LIKE ?";
$stmt = $connectedDB->prepare($sql);
echo "<p>Preparing the SQL-statement:<br><code>$sql</code><p>";

// Execute the SQL statement using parameters to replace the ?
$params = [$dinoPos];
$stmt->execute($params);
echo "<p>Executing using parameters:<br><pre>" . htmlentities(print_r($params, true)) . "</pre>";

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<p>The result contains " . count($res) . " rows.</p>";

// Loop through the array and gather the data into table rows
$rows = null;
foreach ($res as $row) {
    $rows .= "<form action='' method='POST'>";
    $rows .= "<fieldset>";
    $rows .= "<input name='updatePosition' value={$row['position']}>";
    $rows .= "<input name='updateLatin' value={$row['latin']}>";
    $rows .= "<input name='updateDiet' value={$row['diet']}>";
    $rows .= "<input name='updateLeng' value={$row['leng']}>";
    $rows .= "<input name='updateWgt' value={$row['wgt']}>";
    $rows .= "<input type='submit' name='update' value='Update'>";
    $rows .= "</fieldset>";
    $rows .= "</form>";
}

// Print out the result as a HTML table using PHP heredoc
echo <<<EOD
$rows
EOD;

// Get incoming from search form
$updatePosition = isset($_POST['updatePosition'])
? $_POST['updatePosition']
: null;
$updateLatin = isset($_POST['updateLatin'])
? $_POST['updateLatin']
: null;
$updateDiet = isset($_POST['updateDiet'])
? $_POST['updateDiet']
: null;
$updateLeng = isset($_POST['updateLeng'])
? $_POST['updateLeng']
: null;
$updateWgt = isset($_POST['updateWgt'])
? $_POST['updateWgt']
: null;

// Get incoming from create form
if (isset($_POST['update'])) {
    $updatePosition = $_POST['updatePosition'];
    $updateLatin = $_POST['updateLatin'];
    $updateDiet = $_POST['updateDiet'];
    $updateLeng = $_POST['updateLeng'];
    $updateWgt = $_POST['updateWgt'];

    // Prepare the SQL statement
    // Prepare SQL statement to UPDATE a row in the table
    $sql = <<<EOD
    UPDATE dinosaurs
    SET
        position = ?,
        latin = ?,
        diet = ?,
        leng = ?,
        wgt = ?
    WHERE
        position = $dinoPos
    EOD;
    $stmt = $connectedDB->prepare($sql);

    // Execute the SQL statement using parameters to replace the ?
    $params = [$updatePosition, $updateLatin, $updateDiet, $updateLeng, $updateWgt];
    // Execute the SQL to INSERT within a try-catch to catch any errors.
    try {
        $stmt->execute($params);
        $url = "admin.php";
        header("Location: $url");
    } catch (PDOException $e) {
        echo "<p>Failed to insert a new row, dumping details for debug.</p>";
        echo "<p>Incoming \$_POST:<pre>" . print_r($_POST, true) . "</pre>";
        echo "<p>The error code: " . $stmt->errorCode();
        echo "<p>The error message:<pre>" . print_r($stmt->errorInfo(), true) . "</pre>";
        throw $e;
    }
}