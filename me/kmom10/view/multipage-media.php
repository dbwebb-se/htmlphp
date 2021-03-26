<?php
$pages = $mediaNavbar;
$text = "";

$page = $_GET["page"] ?? "404";
$page = $pages[$page] ?? null;

$file = $page["file"] ?? null;
$request = $page["request"] ?? null;

$file = __DIR__ . "/../media/${page}.php";

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
                    <li><a href="?page=<?= $key ?>" class="<?= $selected ?>"><?php
                    if ($value === 'media') {
                        echo "Media kontakt";
                    } elseif ($value === 'press20100912') {
                        echo "2010-09-12 PM";
                    } elseif ($value === 'nvm-online') {
                        echo "Ute på nätet";
                    } elseif ($value === 'nvm') {
                        echo "Nättraby Vägmuseum";
                    }
                    ?></a></li>
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
                include(__DIR__ . "/../media/media.php");
            }
            ?>

        </article>
    </main>

</div>
