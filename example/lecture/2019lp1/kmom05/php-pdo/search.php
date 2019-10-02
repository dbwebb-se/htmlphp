<?php

include __DIR__ . "/config.php";
include __DIR__ . "/src/functions.php";

// Get incoming
$search = $_GET["search"] ?? null;


$db = connectToDatabase($dsn);

$sql = <<<EOD
SELECT
    *
FROM course
WHERE
--    name LIKE '$search'
    name LIKE ? OR
    term = ? OR
    code LIKE ?
;
EOD;
$stmt = $db->prepare($sql);
$stmt->execute([$search, $search, $search]);

$res = $stmt->fetchAll();

?><link rel="stylesheet" type="text/css" href="css/style.css">
<h1>SELECT from SQLite</h1>

<form>
    <input type="search" name="search" placeholder="Skriv del av söksträng med % som *" autofocus value="<?= htmlentities($search) ?>">
</form>

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
