<?php
$pages = [
    "session-information"  => "session-information",
    "session-terminate"  => "session-terminate",
    "session-count" => "session-count"
];
$text = "";

$page = $_GET["page"] ?? "404";
$page = $pages[$page] ?? null;

$file = $page["file"] ?? null;
$request = $page["request"] ?? null;

$file = __DIR__ . "/../session/${page}.php";

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
