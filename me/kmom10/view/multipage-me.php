<?php
$pages = $meNavbar;
$text = "";

$page = $_GET["page"] ?? "404";
$page = $pages[$page] ?? null;

$file = $page["file"] ?? null;
$request = $page["request"] ?? null;

$file = __DIR__ . "/../me/${page}.php";

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
                        if ($value === 'me') {
                            echo "Marcus Klingborg";
                        } elseif ($value === 'kodstruktur') {
                            echo "Kodstruktur";
                        } elseif ($value === 'redovisning') {
                            echo "Redovisning";
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
                    include(__DIR__ . "/../me/me.php");
                }
                ?>

            </article>
        </main>

    </div>
