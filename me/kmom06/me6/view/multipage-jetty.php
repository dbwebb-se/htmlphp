<?php
// Checks if connected
//
if (is_null($_SESSION["dbChk"])) {
    echo '<div id="content">
                <button onclick="window.location.href=\'\connect-jetty.php\'">
                    Connect
                </button>
                <p>Du är inte uppkopplad till Databasen!</p>';
} else {
    $pages = [
        "home" => "home",
        "a" => "a",
        "b" => "b",
    ];
    $text = "";

    $page = $_GET["page"] ?? "home";
    $page = $pages[$page] ?? null;

    $file = $page["file"] ?? null;
    $request = $page["request"] ?? null;

    $file = __DIR__ . "/../content/${page}.php";

    if (is_readable($file)) {
        $text = file_get_contents($file);
    }

    ?>

    <div class="wrap-main">
            <nav class="navbar">
                <ul>
                    <?php
                    foreach ($pages as $key => $value) :
                        $selected = $page === $key ?
                        "selected": null;
                        ?>
                        <a href="?page=<?= $key ?>"
                        class="<?= $selected ?? null ?>"><?=
                        $value ?></a>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <main class="multipage">
                <button onclick="window.location.href='../me6/disconnect-jetty.php'">
                    Disconnect
                </button>
                <p>Ok, du är nu uppkopplad till databasen!</p>
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
    <?php
}
