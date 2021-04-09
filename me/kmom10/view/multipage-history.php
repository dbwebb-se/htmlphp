<?php
$pages = $historyNavbar;
$text = "";

$page = $_GET["page"] ?? "404";
$page = $pages[$page] ?? null;

$file = $page["file"] ?? null;
$request = $page["request"] ?? null;

$file = __DIR__ . "/../history/${page}.php";

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
                        if ($value === 'history') {
                            echo "Historia";
                        } elseif ($value === 'sweden') {
                            echo "Sverige";
                        } elseif ($value === 'blekinge') {
                            echo "Blekinge";
                        } elseif ($value === 'sources') {
                            echo "Källor";
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
                    include(__DIR__ . "/../history/history.php");
                }
                ?>

            </article>
        </main>

    </div>
