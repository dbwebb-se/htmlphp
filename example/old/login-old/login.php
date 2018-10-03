<?php
// Include common details
include(__DIR__ . "/config.php");



// Get the selected page, or the default one
$page = (isset($_GET['page'])) ? $_GET['page'] : "intro";



// Where are the content-files
$dir  = __DIR__ . "/content/";



// Array with all valid pages
$multipage = [
    "intro"   => "intro.php",
    "login"   => "login.php",
    "logout"  => "logout.php",
    "status"  => "status.php",
    "session" => "show-session.php",
    "protected" => "protected.php",
];



// Get the contentfile to include
if (isset($multipage[$page])) {
    $file = $multipage[$page];
} else {
    die("The value of ?page=" . htmlentities($page) . " is not recognized as a valid page.");
}



?><!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Exempel login</title>
    <link href="css/style.css" rel="stylesheet">
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
