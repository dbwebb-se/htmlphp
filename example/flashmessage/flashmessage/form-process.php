<?php
// Get incoming values from posted form
$message = $_POST["message"] ?? null;

// Set the status message
if ($message === "happy") {
    $_SESSION["flashmessage"] = "This is a HAPPY message :-D!!!";
} elseif ($message === "sad") {
    $_SESSION["flashmessage"] = "This is a SAD message :-(...";
}

// Redirect to the resulting page
header("Location: ?page=result");
