<?php

error_reporting(-1);
ini_set("display_errors", 1);

$siteTitle = " | htmlphp";

$siteNavbar = [
    ["controller" => "me.php",                      "text" => "Hem"],
    ["controller" => "report.php",                  "text" => "Redovisning"],
    ["controller" => "report2.php",                 "text" => "Redovisning2"],
    ["controller" => "about.php",                   "text" => "Om"],
    ["controller" => "multipage.php",               "text" => "Multipage"],
    ["controller" => "session.php",                 "text" => "Session"],
    ["controller" => "multi2.php",                  "text" => "Multi 2"],
    ["controller" => "form.php",                    "text" => "Form"]
];

$siteNavbar2 = [
    ["controller" => "me.php",                      "text" => "Hem"],
    ["controller" => "report.php",                  "text" => "Redovisning"],
    ["controller" => "report2.php",                 "text" => "Redovisning2"],
    ["controller" => "about.php",                   "text" => "Om"],
    ["controller" => "multipage.php",               "text" => "Multipage"],
    ["controller" => "session.php",                 "text" => "Session"],
    ["controller" => "me-multipage.php",            "text" => "Me-multisida"],
    ["controller" => "multi2.php",                 "text" => "Multi 2"]
];

$sessionNavbar = [
    "subpage1" => "subpage1",
    "subpage2" => "subpage2",
    "subpage3" => "subpage3",
];

$kmomNavbar = [
    "kmom01" => "kmom01",
    "kmom02" => "kmom02",
    "kmom03" => "kmom03",
    "kmom04" => "kmom04",
    "kmom05" => "kmom05",
    "kmom06" => "kmom06",
    "kmom07" => "kmom10",
];
$name_mcvk = preg_replace("/[^a-z\d]/i", "", __DIR__);

session_name($name_mcvk);
session_start();
