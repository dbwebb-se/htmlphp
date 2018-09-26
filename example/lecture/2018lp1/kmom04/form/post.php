<?php
/**
 * A self submitting form, submits itself to the same page.
 */
$title = htmlentities($_POST["title"] ?? null);


?><!doctype html>
<meta charset="utf-8">
<title>Self submitting POST form</title>
<form method="post">
    <fieldset>
        <label>Self submitting POST form</label>
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

<?php if ($_POST["create"] ?? false) : ?>
<output>
    <p>This is the content of the posted form.</p>
    <pre>
        <?= var_dump($_POST) ?>
    </pre>
</output>
<?php endif; ?>
