<?php

include __DIR__ . "/config.php";
include __DIR__ . "/src/functions.php";
include __DIR__ . "/view/header.php";
include __DIR__ . "/view/navbar.php";

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

?><h1>SELECT from SQLite</h1>

<form>
    <input type="search" name="search" placeholder="Skriv del av söksträng med % som *" autofocus value="<?= htmlentities($search) ?>">
</form>

<?= getHTMLForCourseResultset($res) ?>

<pre>
    <?= var_dump($res) ?>
