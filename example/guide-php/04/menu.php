<?php
/**
 * This is a sample page controller.
 */
// Include the configuration file
include(__DIR__ . "/config.php");

// Include essential functions
include(__DIR__ . "/src/functions.php");

// Set common variables, these are exposed to the view template files
$title = "Test page";

// Include the page header through the view template file
include(__DIR__ . "/view/header.php");



// Here is my testprogram which outputs the page main content
//echo "Hello my test page.\n";

// Create the collection of valid pages.
$pages = [
    [
        "label" => "Home",
        "title" => "The home page, it starts here.",
        "url" => "home.html",
    ],
    [
        "label" => "About",
        "title" => "About this website.",
        "url" => "about.html",
    ],
];

?>
</pre>
<nav>
    <ul>
    <?php foreach ($pages as $value) : ?>
        <li>
            <a href="<?= $value["url"] ?>" title="<?= $value["title"] ?>">
                <?= $value["label"] ?>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
</nav>

<?php


// Include the page footer through the view template file
include(__DIR__ . "/view/footer.php");
