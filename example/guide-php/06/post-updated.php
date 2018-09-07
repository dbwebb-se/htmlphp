<?php
/**
 * A post form submitting to a processing page that does a redirect.
 */


?><!doctype html>
<meta charset="utf-8">
<title>POST form to processing page</title>
<form method="post" action="post-process-redirect.php">
    <fieldset>
        <label>POST form to processing page</label>
        <p>
            <label for="title">Title:</label>
            <input id="title" type="text" name="title" value="<?= htmlentities($_POST["title"] ?? null) ?>">
        </p>
        <p>
            <input type="submit" name="create" value="Create">
            <input type="reset" value="Reset">
        </p>
    </fieldset>
</form>
