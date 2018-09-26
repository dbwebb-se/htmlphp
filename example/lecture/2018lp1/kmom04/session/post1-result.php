<?php
/**
 * A self submitting form, submits itself to the same page.
 */
require __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";

// Read once flash message
$message = $_SESSION["flashmessage"] ?? null;
$_SESSION["flashmessage"] = null;

//$title = htmlentities($_POST["title"] ?? null);



?><!doctype html>
<meta charset="utf-8">
<title>Self submitting POST form</title>

<h1>Thanks!</h1>

<?php if ($message) : ?>
<div style="background-color: green;">
<p><?= $message ?>
</div>
<?php endif; ?>
