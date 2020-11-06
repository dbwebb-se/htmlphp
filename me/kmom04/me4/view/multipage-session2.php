<?php
$pages = [
    "subpage1"  => "subpage1",
    "subpage2"  => "subpage2",
    "subpage3"  => "subpage3",
    "404"       => "404",
];
$text = "";

$page = $_GET["page"] ?? "subpage1";
$page = $pages[$page] ?? null;
$request = $page["request"] ?? null;

$file = __DIR__ . "/../session2/${page}.php";

if (is_readable($file)) {
    $text = file_get_contents($file);
}

?>

<div class="wrap-main">
        <aside class="multipage-nav">
            <nav>
                <ul>
                <?php foreach ($pages as $key => $value) :
                    $selected = $page === $key ? "selected": null;
                    ?>
                        <li><a href="?page=<?= $key ?>" class="<?= $selected ?>"><?= $value ?></a></li>
                <?php endforeach; ?>
                </ul>
            </nav>
        </aside>

        <main class="multipage">
            <article>
                <h1>Sessionsida</h1>

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
