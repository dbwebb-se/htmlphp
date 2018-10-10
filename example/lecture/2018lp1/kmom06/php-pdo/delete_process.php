<?php

include __DIR__ . "/config.php";
include __DIR__ . "/src/functions.php";

$code = $_POST["code"] ?? null;
if (!$code) {
    die("Du måste ange en kurskod!");
} 

$db = connectToDatabase($dsn);

$sql = "DELETE FROM course WHERE code = ?;";
$stmt = $db->prepare($sql);
$stmt->execute([$code]);

$url = "select.php";
header("Location: $url");
