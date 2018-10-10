<?php

include __DIR__ . "/config.php";
include __DIR__ . "/src/functions.php";

$code = $_POST["code"] ?? null;
$name = $_POST["name"] ?? null;
if (!$code || !$name) {
    die("Du måste ge kursen en kurskod och ett namn!");
} 

$db = connectToDatabase($dsn);

$sql = "INSERT INTO course (code, name) VALUES (?, ?);";
$stmt = $db->prepare($sql);
$stmt->execute([$code, $name]);

$url = "select.php";
header("Location: $url");
