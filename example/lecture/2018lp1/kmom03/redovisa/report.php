<?php
/**
 * Pagecontroller
 */
require __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";

$title = "Redovisning" . $baseTitle;
require __DIR__ . "/view/header.php";
require __DIR__ . "/view/report.php";
require __DIR__ . "/view/footer.php";
