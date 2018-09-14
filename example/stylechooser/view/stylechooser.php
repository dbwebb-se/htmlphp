<?php
/**
 * Generate a stylesheet <link based on the content of the session,
 * to implement a stylechooser.
 * <link rel="stylesheet" type="text/css" href="css/style.css">
 */
$style = $_SESSION["style"] ?? "default";

$styles = [
    "default" => "css/stylesheet.css",
    "dark" => "css/dark.css",
    "colorful" => "css/colorful.css",
];

// Map the style towards the available styles, and use a default style
$stylesheet = $styles[$style] ?? $styles["default"];



?><link rel="stylesheet" type="text/css" href="<?= $stylesheet ?>">
