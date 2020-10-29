<?php
include(__DIR__ . "/view/layout/multipage.php");

$pages = [
    "kmom01",
    "kmom02",
    "kmom03",
    "kmom04",
    "kmom05",
    "kmom06",
    "kmom10",
];

$page = $_GET["page"] ?? null;
echo "page";


$text =  "404 texten ännu inte skriven.";

$file = __DIR__ . "/content/${page}.php";
if (is_readable($file)) {
    $text = file_get_contents($file);
}

?>
<!--
<div class="wrap-main">
        <aside class="multipage">
            <nav>
                <ul>
                    <?php foreach ($pages as $key => $value) : ?>
                        <li><a href="?page<?= $key ?>"><?= $value["title"] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </aside>
                    -->

        <main>
            <article>
                <h1>Redovisning</h1>

                <?= $text ?>

            </article>
        </main>
