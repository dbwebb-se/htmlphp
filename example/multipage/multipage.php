<?php
$page = "intro";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

//var_dump($page);


$dir  = __DIR__ . "/content";
$file = null;

if ($page === "intro") {
    $file = "intro.php";

} elseif ($page === "print-server") {
    $file = "print-server.php";

} elseif ($page === "print-get") {
    $file = "print-get.php";

} elseif ($page === "get-samples") {
    $file = "get-samples.php";

} else {
    die("The value of ?page=" . htmlentities($page) . " is not recognized as a valid page.");
}

?><!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Exempel multisida</title>

    <style>
    body {
        margin: 8px auto;
        width: 980px;
        background-color: #fee;
    }
    
    main {
        width: 70%;
        float: left;
        background-color: #ddd;
    }
    
    aside {
        width: 30%;
        float: left;
        background-color: #ccc;
    }
    
    .byline {
        border-top: 2px dashed #fee;
    }
    </style>
</head>

<body>

    <aside><?php include("aside.php")?></aside>

    <main>
        <article>
            <?php include("$dir/$file")?>
            <footer class="byline"><?php include("footer.php")?></footer>
        </article>
    </main>

</body>
</html>
