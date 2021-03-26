<?php
$init = $_POST["init"] ?? null;

?>
<p>Reverts the database to its original content.</p>
<form method="POST">
    <fieldset>
        <input type="hidden" name="page" value="init">
        <input type="submit" name="init" value="Init DB">
    </fieldset>
</form>

<?php
$sql = [];

// Prepare SQL statement to DROP TABLE
$sql[] = "DROP TABLE IF EXISTS dinosaurs;";

// Prepare SQL statement to Create to table
$sql[] = <<<EOD
CREATE TABLE "dinosaurs" (
    "position"	INTEGER,
    "latin"	TEXT NOT NULL UNIQUE,
    "diet"	INTEGER,
    "leng"	INTEGER,
    "wgt"	INTEGER,
    PRIMARY KEY("position" AUTOINCREMENT)
);
EOD;

// Prepare SQL statement to INSERT to table
$sql[] = "INSERT INTO dinosaurs VALUES (1, 'Stegosaurus', 'Herbivore', 9, NULL)";
$sql[] = "INSERT INTO dinosaurs VALUES (2, 'Triceratops', 'Herbivore', 9, 5500)";
$sql[] = "INSERT INTO dinosaurs VALUES (3, 'Tyrannosaurus', 'Carnivore', 12, 7000)";
$sql[] = "INSERT INTO dinosaurs VALUES (4, 'Diplodocus', 'Herbivore', 26, 20000)";

if ($init) {
    $db = connectToDatabase($_SESSION["dsnDinosaur"]);

    foreach ($sql as $query) {
        // Execute the SQL to Delete within a try-catch to catch any errors.
        try {
            $stmt = $db->prepare($query);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "<p>Failed to insert a new row, dumping details for debug.</p>";
            echo "<p>Incoming \$_POST:<pre>" . print_r($_POST, true) . "</pre>";
            echo "<p>The error code: " . $stmt->errorCode();
            echo "<p>The error message:<pre>" . print_r($stmt->errorInfo(), true) . "</pre>";
            throw $e;
        }
    }
    $url = "admin.php";
    header("Location: $url");
}
