<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/src/functions.php");
include(__DIR__ . "/view/layout/multipage-top.php");

$pages = [
    "kmom01" => "kmom01",
    "kmom02" => "kmom02",
    "kmom03" => "kmom03",
    "kmom04" => "kmom04",
    "kmom05" => "kmom05",
    "kmom06" => "kmom06",
    "kmom07" => "kmom10",
];
$text = "";

$page = $_GET["page"] ?? "kmom01";
$page = $pages[$page] ?? "null";

$file = $page["file"] ?? null;
$request = $page["request"] ?? "null";

$text = "404 texten ännu inte skriven.";
$file = __DIR__ . "/content/${page}.php";
if (is_readable($file)) {
    $text = file_get_contents($file);
}

?>

<div class="wrap-main">
        <aside class="multipage-nav">
            <nav>
                <ul>
                    <?php
                    foreach ($pages as $key => $value) : 
                        $selected = $page === $key ?
                        "selected": null;
                        ?>
                        <li><a href="?page=<?= $key ?>"
                        class="<?= $selected ?? null ?>"><?= $value ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </aside>

        <main class="multipage">
            <article>
                <h1>Redovisning</h1>

                <?= $text ?>

            </article>
        </main>

</div>
<?php
include(__DIR__ . "/view/byline.php");
include(__DIR__ . "/view/layout/multipage-bottom.php");
