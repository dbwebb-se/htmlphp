<?php

include __DIR__ . "/config.php";
include __DIR__ . "/src/functions.php";
include __DIR__ . "/view/header.php";
include __DIR__ . "/view/navbar.php";

$db = connectToDatabase($dsn);

$sql = "SELECT * FROM course;";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll();

?><h1>SELECT from SQLite</h1>

<?= getHTMLForCourseResultset($res) ?>

<pre>
    <?= var_dump($res) ?>
