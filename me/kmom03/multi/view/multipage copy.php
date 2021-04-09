<?php
$file = $page["file"] ?? null;

$request = $page["request"] ?? null;

?>

<div class="wrap-main">
        <aside class="multipage">
            <nav>
                <ul>
                    <?php
                    foreach ($pages as $key => $value) :
                        $selected = "request" === $key ?
                        "selected": null;
                        ?>
                        <li><a href="?page=<?= $key ?>"
                        class="<?= $selected ?>"><?=
                        $value["text"] ?></a></li>
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
