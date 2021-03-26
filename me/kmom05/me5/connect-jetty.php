<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/src/functions.php");

connectToDatabase($dsnJetty);

$url = "jetty.php";
header("Location: $url");
