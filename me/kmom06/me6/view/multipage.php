<?php
$pages = [
    "index" => "index",
    "print-get" => "print-get",
    "print-server" => "print-server",
    "get-samples" => "get-samples",
];
$text = "";

$page = $_GET["page"] ?? "index";
$page = $pages[$page] ?? null;

$file = $page["file"] ?? null;
$request = $page["request"] ?? null;

$file = __DIR__ . "/../multipage/${page}.php";

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
                        class="<?= $selected ?? null ?>"><?=
                        $value ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </aside>

        <main class="multipage">
            <article>
                <?php
                if (is_readable($file)) {
                    include($file);
                } else {
                    echo "Multipage view: 404";
                }
                ?>
            </article>
        </main>

</div>
<div class="wrap-main">
