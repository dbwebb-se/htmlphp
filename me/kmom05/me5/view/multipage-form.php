<?php
$pages = [
    "form-contact"              => "form-contact",
    "form-message"              => "form-message",
    "form-processing"           => "form-processing",
    "form-contact-processing"   => "form-contact-processing",
    "form-contact-result"       => "form-contact-result",
    "form-result"              => "form-result",
];
$text = "";

$page = $_GET["page"] ?? "form-contact";
$page = $pages[$page] ?? null;

$file = $page["file"] ?? null;
$request = $page["request"] ?? null;

$file = __DIR__ . "/../form/${page}.php";

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
