<?php
/**
 * A self submitting form, submits itself to the same page.
 */
$title = htmlentities($_GET["title"] ?? null);


?><!doctype html>
<meta charset="utf-8">
<title>Self submitting GET form</title>
<form>
    <fieldset>
        <label>Self submitting GET form</label>
        <p>
            <label for="title">Title:</label>
            <input id="title" type="text" name="title" value="<?= $title ?>">
        </p>
        <p>
            <input type="submit" name="create" value="Create">
            <input type="reset" value="Reset">
        </p>
    </fieldset>
</form>

<?php if ($_GET["create"] ?? false) : ?>
<output>
    <p>This is the content of the posted form.</p>
    <pre>
        <?= var_dump($_GET) ?>
    </pre>
</output>
<?php endif; ?>
