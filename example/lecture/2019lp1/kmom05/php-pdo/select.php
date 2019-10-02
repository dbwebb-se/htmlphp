<?php

include __DIR__ . "/config.php";
include __DIR__ . "/src/functions.php";

$db = connectToDatabase($dsn);

$sql = "SELECT * FROM course;";
$stmt = $db->prepare($sql);
$stmt->execute();

$res = $stmt->fetchAll();

?><link rel="stylesheet" type="text/css" href="css/style.css">
<h1>SELECT from SQLite</h1>

<table>
    <tr>
        <th>Namn</th>
        <th>Kod</th>
        <th>Poäng</th>
        <th>Termin</th>
        <th>Kmom</th>
        <th>Klar</th>
    </tr>

    <?php foreach ($res as $row) : ?>
        <tr>
            <td><?= $row["code"] ?></td>
            <td><?= $row["name"] ?></td>
            <td><?= $row["points"] ?></td>
            <td><?= $row["term"] ?></td>
            <td><?= $row["kmom"] ?></td>
            <td><?= $row["done"] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<pre>
    <?= var_dump($res) ?>
