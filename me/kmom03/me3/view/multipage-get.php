<?php
include(__DIR__ . "/../config.php");
$text = "";

$page = $_GET["page"] ?? "index";
$page = $pages[$page] ?? null;

$text = "404 Ops, denna sidan var tom.";
$file = __DIR__ . "/../multipage/${page}.php";

if (is_readable($file)) {
    $text = file_get_contents($file);
}

?>

<div class="wrap-main">
        <aside class="multipage">
            <nav>
                <ul>
                    <?php foreach ($pages as $key => $value) : ?>
                        <li><a href="?page=<?= $key ?>"><?= $value ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </aside>

        <main class="multipage">
            <article>
                <h1>Multisida</h1>

                <?= $text ?>

            </article>
        </main>

</div>
