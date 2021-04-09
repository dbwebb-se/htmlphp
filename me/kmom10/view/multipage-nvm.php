<?php
$pages = $nvmNavbar;
$text = "";

$page = $_GET["page"] ?? "404";
$page = $pages[$page] ?? null;

$file = $page["file"] ?? null;
$request = $page["request"] ?? null;

$file = __DIR__ . "/../nvm/${page}.php";

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
                    if ($value === 'nvm') {
                        echo "Om Museét";
                    } elseif ($value === 'contact') {
                        echo "Kontakt";
                    } elseif ($value === 'guide') {
                        echo "Guidning";
                    } elseif ($value === 'links') {
                        echo "Länkar";
                    } elseif ($value === 'associate') {
                        echo "Intressenter";
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
                include(__DIR__ . "/../nvm/nvm.php");
            }
            ?>

        </article>
    </main>

</div>
