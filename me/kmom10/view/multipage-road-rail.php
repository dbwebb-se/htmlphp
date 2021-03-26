<?php
$pages = $roadRailNavbar;
$text = "";

$page = $_GET["page"] ?? "404";
$page = $pages[$page] ?? null;

$file = $page["file"] ?? null;
$request = $page["request"] ?? null;

$file = __DIR__ . "/../road-rail/${page}.php";

if (is_readable($file)) {
    $text = file_get_contents($file);
}

?>
<p> multi väg</p>

<div class="wrap-main">
    <aside class="multipage-nav">
        <nav>
            <ul>
            <?php foreach ($pages as $key => $value) :
                $selected = $page === $key ? "selected": null;
                ?>
                    <li><a href="?page=<?= $key ?>" class="<?= $selected ?>"><?php
                    if ($value === 'cykelvagen') {
                        echo "Cykelvägen";
                    } elseif ($value === 'e22') {
                        echo "E22";
                    } elseif ($value === 'halvagen') {
                        echo "Hålvägen";
                    } elseif ($value === 'isvagen') {
                        echo "Isvägen";
                    } elseif ($value === 'krosnabanan') {
                        echo "Krösnabanan";
                    } elseif ($value === 'kustbanan') {
                        echo "Kustbanan";
                    } elseif ($value === 'milstolparna') {
                            echo "Milstolparna";
                    } elseif ($value === 'nattrabyan') {
                        echo "Nättrabyån";
                    } elseif ($value === 'riks-4') {
                        echo "Riks 4";
                    } elseif ($value === 'ryttarliden') {
                        echo "Ryttarliden";
                    } elseif ($value === 'skillinge') {
                        echo "Skillinge";
                    } elseif ($value === 'stenbron') {
                        echo "Stenbron";
                    } elseif ($value === 'varendsvagen') {
                        echo "Vårendsvägen";
                    } elseif ($value === 'via-regia') {
                        echo "Via Regia";
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
                include(__DIR__ . "/../road-rail/road-rail.php");
            }
            ?>

        </article>
    </main>

</div>
