<?php 
/**
 * This is a POST form processing page to avoid problems with reload.
 * It handles the posted form and redirect to a response page.
 */
if (!isset($_POST["create"])) {
    die("No direct access to this page, only through the posted form.");
}

$querystring = [];
$querystring["page"] = "generate-card";
$querystring["name"] = $_POST["name"] ?? null;
$querystring["title"] = $_POST["title"] ?? null;
$querystring["image"] = $_POST["image"] ?? null;
$querystring["address"] = $_POST["address"] ?? null;
$querystring["city"] = $_POST["city"] ?? null;

$url = "?";
foreach ($querystring as $key => $value) {
    $url .= "$key=" . urlencode($value) . "&";
}

header("Location: $url");
exit;
