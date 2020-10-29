<?php
include(__DIR__ . "/view/layout/multipage.php");

$title = "Uppgraderad Multisida";

$defaultPage = "me";
$pages = [
    "me"  => ["text"  => "Me-sida"],
    "subpageg2" => ["text"  => "Undersida 2"],
    "subpage3"  => ["text"  => "Undersida 3"],
];

$page = getPageDetailsOfMultiPage($pages, $defaultPage, __FILE__);
