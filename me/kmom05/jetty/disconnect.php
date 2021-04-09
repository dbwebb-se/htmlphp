<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/src/functions.php");

sessionDestroy();

$url = "jetty.php";
header("Location: $url");
