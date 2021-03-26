<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/src/functions.php");

connectToDatabase($dsnDinosaur);

$url = "admin.php";
header("Location: $url");
