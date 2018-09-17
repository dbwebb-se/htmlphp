<?php
/**
 * Generate a stylesheet <link based on the content of the session,
 * to implement a stylechooser.
 * <link rel="stylesheet" type="text/css" href="css/style.css">
 */
// Get the style from session, or set a default style
$style = $_SESSION["style"] ?? null;

// Map the style towards the available styles, and use a default style
$stylesheet = $styles[$style] ?? $styles["default"];

?><link rel="stylesheet" type="text/css" href="<?= $stylesheet ?>">
