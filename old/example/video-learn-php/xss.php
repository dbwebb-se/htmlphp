<!doctype html>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
<title>Cross site script injection</title>

<h1>Cross site script injection</h1>
<hr>
<pre>
<?php

//$page = isset($_GET["page"]) ? $_GET["page"] : null;

$page = isset($_GET["page"])
    ? htmlentities($_GET["page"])
    : null;

/*
$page = null;
if (isset($_GET["page"])) {
    $page = $_GET["page"];
}
*/

echo $page;
