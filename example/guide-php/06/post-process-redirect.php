<?php
/**
 * A processing page that does a redirect.
 */
if ($_POST["create"] ?? false) {
    // Do some processing of the form data
    // for example write to the database.
}

// Redirect to a result page.
$url = "post-result.php";
header("Location: $url");
