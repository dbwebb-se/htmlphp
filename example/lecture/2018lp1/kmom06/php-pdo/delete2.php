<?php

include __DIR__ . "/config.php";
include __DIR__ . "/src/functions.php";
include __DIR__ . "/view/header.php";
include __DIR__ . "/view/navbar.php";

$code = $_GET["code"] ?? null;

$db = connectToDatabase($dsn);
$sql = "SELECT * FROM course;";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll();


?><h1>Ta bort kurs</h1>

<form action="delete_process.php" method="post">
    <p>
        <label>Välj kurs att radera:<br>
            <select name="code">
                <option value="-1">Välj kurs...</option>
                <?php foreach ($res as $row) :
                    $selected = $code === $row["code"] ? "selected=\"selected\"" : null;
                    ?>
                    <option <?= $selected ?> value="<?= $row["code"] ?>"><?= $row["code"] . " " . $row["name"] ?></option>
                <?php endforeach; ?>
            </select>
    </p>
    <p>
        <input type="submit" value="Ta bort kurs">
    </p>
</form>
