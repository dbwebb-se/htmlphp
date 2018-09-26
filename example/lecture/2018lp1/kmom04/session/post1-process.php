<?php
/**
 * A self submitting form, submits itself to the same page.
 */
require __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";
//$title = htmlentities($_POST["title"] ?? null);

// echo "<pre>";
// var_dump($_GET);
// var_dump($_POST);

//$nono = $_POST["nono"];

$title = $_POST["title"] ?? "FUSK!";
$_SESSION["flashmessage"] = $title;


$url = "post1-result.php";
header("Location: $url");
