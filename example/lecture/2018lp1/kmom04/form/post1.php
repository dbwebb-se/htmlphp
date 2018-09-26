<?php
/**
 * A self submitting form, submits itself to the same page.
 */



?><!doctype html>
<meta charset="utf-8">
<title>Self submitting POST form</title>
<form method="post" action="post1-process.php">
    <fieldset>
        <label>Self submitting POST form</label>
        <p>
            <label for="title">Title:</label>
            <input id="title" type="text" name="title">
        </p>
        <p>
            <input type="submit" name="create" value="Create">
            <input type="reset" value="Reset">
        </p>
    </fieldset>
</form>
