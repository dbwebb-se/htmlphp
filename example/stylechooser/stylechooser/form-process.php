<?php
// Get incoming values from posted form
$stylechooser = $_POST["stylechooser"] ?? null;
$redirect = $_POST["redirect"] ?? "?page=form";

// Update the current selected style, if it is a valid style.
// The array $styles of valid styles is defined in config.php
$style = $styles[$stylechooser] ?? null;
if ($style) {
    $_SESSION["style"] = $stylechooser;
    $_SESSION["flashmessage"] = "You have updated the selected style to '$stylechooser' which is implemented through the stylesheet '{$styles[$stylechooser]}'!";
    header("Location: $redirect");
    exit;
}

// Failed to select a valid style.
$_SESSION["flashmessage"] = "You did not select a valid style!";
header("Location: $redirect");
