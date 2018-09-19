<?php
/**
 * Pagecontroller
 */
require __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";


// if

// __DIR__ . "/kmom01.php";
// __DIR__ . "/kmom02.php";
// __DIR__ . "/kmom03.php";
// __DIR__ . "/kmom04.php";
// __DIR__ . "/kmom05.php";
// __DIR__ . "/kmom06.php";
// __DIR__ . "/kmom10.php";

//$page = isset($_GET["page"]) ? $_GET["page"] : "kmom01";

// $subpage = __DIR__ . "/view/$page.php";

$page = $_GET["page"] ?? "kmom01";
$pages = [
  "kmom01" => [
    "title" => "Kmom01",
    "subpage" => __DIR__ . "/view/kmom01.php"
  ],
  "kmom02" => [
    "title" => "Kmom02",
    "subpage" => __DIR__ . "/view/kmom02.php"
  ],
  "kmom03" => [
    "title" => "Kmom03",
    "subpage" => __DIR__ . "/view/kmom03.php"
  ],
];

$validPage = $pages[$page] ?? null;
if (!$validPage) {
  die("Buse. Felaktig page=");
}


// Render the page
$title = "{$validPage["title"]} redovisning" . $baseTitle;
$subpage = $validPage["subpage"];
require __DIR__ . "/view/header.php";
require __DIR__ . "/view/report_multi.php";
require __DIR__ . "/view/footer.php";
