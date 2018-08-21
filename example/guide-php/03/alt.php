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
echo "Hello my test page.\n";

// Count from one to ten
$number = 1;

?>
<title>
<?php if ($title) : ?>
    <?= $title ?>
<?php else : ?>
    No title was defined.
<?php endif; ?>
</title>

<?php while ($number <= 10) : ?>
    <p><?= $number++ ?></p>
<?php endwhile; ?>


<?php

// Include the page footer through the view template file
include(__DIR__ . "/view/footer.php");
