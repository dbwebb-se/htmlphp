<?php

$siteTitle = " | Nättraby Vägmuseum";

// Create a Session.
$name_mcvk = preg_replace("/[^a-z\d]/i", "", __DIR__);

session_name($name_mcvk);
session_start();


// Create a DSN for the database using its filename.
$filename = __DIR__ . "/db/nvm2.sqlite";
$dsn = "sqlite:$filename";
$_SESSION["dsn"] = $dsn;

// Create a DSN for the database using its filename.
$filename = __DIR__ . "/db/nvm.sqlite";
$dsn = "sqlite:$filename";
$_SESSION["dsn"] = $dsn;

$siteNavbar = [
    ["controller" => "index.php",       "text" => "Hem"],
    ["controller" => "nvm.php",         "text" => "Om Museét"],
    ["controller" => "road-rail.php",   "text" => "Vägar"],
    ["controller" => "maps.php",        "text" => "Kartor"],
    ["controller" => "history.php",     "text" => "Historia"],
    ["controller" => "media.php",       "text" => "Media"],
    ["controller" => "me.php",          "text" => "Marcus Klingborg"]
];

$roadRailNavbar = [
    "cykelvagen"    => "cykelvagen",
    "e22"           => "e22",
    "halvagen"      => "halvagen",
    "isvagen"       => "isvagen",
    "krosnabanan"   => "krosnabanan",
    "kustbanan"     => "kustbanan",
    "milstolparna"  => "milstolparna",
    "nattrabyan"   => "nattrabyan",
    "riks-4"        => "riks-4",
    "ryttarliden"   => "ryttarliden",
    "skillinge"     => "skillinge",
    "stenbron"      => "stenbron",
    "varendsvagen"  => "varendsvagen",
    "via-regia"     => "via-regia",
];

$historyNavbar = [
    "history"   => "history",
    "sweden"    => "sweden",
    "blekinge"  => "blekinge",
    "sources"   => "sources"
];

$nvmNavbar = [
    "nvm"       => "nvm",
    "contact"   => "contact",
    "guide"     => "guide",
    "links"     => "links",
    "associate" => "associate"
];

$meNavbar = [
    "kmom01" => "kmom01",
    "kmom02" => "kmom02",
    "kmom03" => "kmom03",
    "kmom04" => "kmom04",
    "kmom05" => "kmom05",
    "kmom06" => "kmom06",
    "kmom07" => "kmom10",
];

$mediaNavbar = [
    "media"         => "media",
    "press20100912" => "press20100912",
    "nvm-online"    => "nvm-online",
    "nvm"           => "nvm"
];
