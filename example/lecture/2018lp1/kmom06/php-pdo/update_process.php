<?php

include __DIR__ . "/config.php";
include __DIR__ . "/src/functions.php";

$code = $_POST["code"] ?? null;
$name = $_POST["name"] ?? null;
$points = $_POST["points"] ?? null;
$term = $_POST["term"] ?? null;
$kmom = $_POST["kmom"] ?? null;
$done = $_POST["done"] ?? null;

$db = connectToDatabase($dsn);

$sql = <<<EOD
UPDATE course SET
    name = ?,
    points = ?,
    term = ?,
    kmom = ?,
    done = ?
WHERE
    code = ?
;
EOD;
$stmt = $db->prepare($sql);
$stmt->execute([$name, $points, $term, $kmom, $done, $code]);

$url = "update.php?code=$code";
header("Location: $url");
