<?php

include __DIR__ . "/config.php";
include __DIR__ . "/src/functions.php";
include __DIR__ . "/view/header.php";
include __DIR__ . "/view/navbar.php";

$code = $_GET["code"] ?? null;

$db = connectToDatabase($dsn);

$sql = <<<EOD
SELECT
    *
FROM course
WHERE
    code LIKE ?
;
EOD;
$stmt = $db->prepare($sql);
$stmt->execute([$code]);
$res = $stmt->fetch();

?><h1>Uppdatera detaljer om kurs</h1>

<form action="update_process.php" method="post">
    <p>
        <label for="code">Kod:<br>
        <input type="text" name="code" value="<?= $res["code"] ?>" readonly></label>
    </p>
    <p>
        <label for="code">Namn:<br>
        <input type="text" name="name" value="<?= $res["name"] ?>"></label>
    </p>
    <p>
        <label for="code">Poäng:<br>
        <input type="text" name="points" value="<?= $res["points"] ?>"></label>
    </p>
    <p>
        <label for="code">Termin:<br>
        <input type="text" name="term" value="<?= $res["term"] ?>"></label>
    </p>
    <p>
        <label for="code">Kmom:<br>
        <input type="text" name="kmom" value="<?= $res["kmom"] ?>"></label>
    </p>
    <p>
        <label for="code">Klar:<br>
        <input type="text" name="done" value="<?= $res["done"] ?>"></label>
    </p>
    <p>
        <input type="submit" value="Spara">
    </p>
</form>

<pre>
    <?= var_dump($res) ?>
