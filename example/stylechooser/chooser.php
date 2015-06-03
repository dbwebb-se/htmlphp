<?php
// Start the session
$name = substr(preg_replace('/[^a-z\d]/i', '', __DIR__), -30);
session_name($name);
session_start();



// Valid stylesheets and valid values to store in the session
$stylesheets = [
    "default" => "css/style.css",
    "second" => "css/second.css",
];

// Get current stylesheet from the session, or use default
$key = isset($_SESSION['stylesheet'])
    ? $_SESSION['stylesheet']
    : "default";

// See if the key actually matches a stylesheet
if (isset($stylesheets[$key])) {
    $stylesheet = $stylesheets[$key];
} else {
    die("The value of key='$key' does not match a valid stylesheet.");
}



// Get the selected page, or the default one
$page = (isset($_GET['page'])) ? $_GET['page'] : "intro";



// Where are the content-files
$dir  = __DIR__ . "/content/";



// Array with all valid pages
$multipage = [
    "intro"    => "intro.php",
    "current"  => "current-value.php",
    "get"      => "change-get.php",
    "dropdown" => "change-dropdown.php",
    "post-dropdown" => "post-dropdown.php",
    "postform" => "postform.php",
];



// Get the contentfile to include
if (isset($multipage[$page])) {
    $file = $multipage[$page];
} else {
    die("The value of ?page=" . htmlentities($page) . " is not recognized as a valid page.");
}



?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Example stylechooser</title>
    <link href="<?=$stylesheet?>" rel="stylesheet">
</head>

<body>

    <aside><?php include("aside.php")?></aside>

    <main>
        <article>
            <?php include("$dir/$file")?>
        </article>
    </main>

</body>
</html>
