<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/src/functions.php");

session_destroy();

$url = "admin.php";
header("Location: $url");
